<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;
use Illuminate\Support\Facades\Log;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Origine;
use App\Models\Acteur;

class ActeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $acteurs = Acteur::all();
        return view('acteurs.index', compact(['acteurs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('acteurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $acteur = new Acteur($request->all());
            $acteur->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('acteurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Acteur $acteur)
    {
        //
        return view('acteurs.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $acteur = Acteur::findOrFail($id);
        return view('acteurs.edit', compact('acteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {
            $acteur = Acteur::findOrFail($id);

            $acteur->img = $request->img;
            $acteur->nom = $request->nom;
            $acteur->prenom = $request->prenom;

            $acteur->save();
            return redirect()->route('acteurs.index')->with('message', 'Modification de ' . $acteur->prenom . " " . $acteur->nom . " réussi!");
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('acteurs.index')->withErrors(['La modification n\'a pas fonctionnée.']);
        }

        return redirect()->route('acteurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $acteur = Acteur::findOrFail($id);

            $acteur->delete();

            return redirect()->route('acteurs.index')->with('message', "Suppression de " . $acteur->prenom . " " . $acteur->nom . " réussi!");
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('acteurs.index')->withErrors(['la suppression n\'a pas fonctionné']);
        }

        return redirect()->route('acteurs.index');
    }
}

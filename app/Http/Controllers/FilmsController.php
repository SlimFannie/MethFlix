<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;
use Illuminate\Support\Facades\Log;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Origine;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $films = Film::all();
        $genres = Genre::all();

        return view('films.index', compact(['films', 'genres']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $origines = Origine::all();
        return view('films.create', compact(['origines']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $film = new Film($request->all());
            $film->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        $origines = Origine::all();
        return view('films.edit', compact('film', 'origines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FilmRequest $request, $id)
    {
        try {
            $film = Film::findOrFail($id);

            $film->titre = $request->titre;
            $film->resume = $request->resume;
            $film->annee = $request->annee;
            $film->origine_id = $request->origine_id;
            $film->minutes = $request->minutes;
            $film->img = $request->img;

            $film->save();
            return redirect()->route('films.index')->with('message', 'Modification de ' . $film->titre . " réussi!");
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('films.index')->withErrors(['La modification n\'a pas fonctionnée.']);
        }

        return redirect()->route('films.index');
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
    }
}

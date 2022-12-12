@extends('layouts.app')

    @section('contenu')
    <div class="container-fluid bg">
        <div class="row text-center">
            <h3 class="textcharcoal">Enfin l'heure de chiller tranquille!</h3>
            <img src="https://static-prod.adweek.com/wp-content/uploads/2017/08/lays-disjointed-PAGE-2017.jpg" class="img-fluid w-50 mx-auto py-3">
            <h4 class="textcharcoal">On regarde tu un film?</h4>
        </div>
        <div class="row">
            @if (count($acteurs))
                @foreach($acteurs as $acteur)
                <div class="col-3 pb-3">
                    <div class="card g-0 h-100 bgcard text-center">
                        <img src="{{ $acteur->img }}" class="card-img-top" height="550vh">
                        <h5 class="card-title pt-3">{{ $acteur->prenom }} {{ $acteur->nom }}</h5>
                        <div class="card-body collapse" id="resume">
                            <a href="{{ route('acteurs.edit', [$acteur->id]) }}">Modifier l'acteur'</a>
                            <form method="POST" action="{{ route('acteurs.destroy', [$acteur->id]) }}">
                                 @csrf
                                 @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('acteurs.show', [$acteur->id]) }}" class="btn btn-jaune align-bottom">Dans quoi tu joues? <i class="fa-solid fa-magnifying-glass"></i></a>
                            <a href="{{ route('acteurs.destroy', [$acteur->id]) }}" class="btn btn-danger align-bottom">Sors de ma vie! <i class="fa-regular fa-face-tired"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p>Il n'y a aucun film.</p>
            @endif
        </div>
    </div>
@stop
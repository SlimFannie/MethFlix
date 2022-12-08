@extends('layouts.app')

    @section('contenu')
    <div class="container-fluid bg">
        <div class="row text-center">
            <h3 class="textcharcoal">Enfin l'heure de chiller tranquille!</h3>
            <img src="https://static-prod.adweek.com/wp-content/uploads/2017/08/lays-disjointed-PAGE-2017.jpg" class="img-fluid w-50 mx-auto">
            <h4 class="textcharcoal">On regarde tu un film?</h4>
            <a class="btn btn-default" href="{{ route('films.create') }}">Ajouter</a>
        </div>
        <div class="row text-center">
                <select name="id" id="filtre" onchange="goTo(this.value)">
                    @if (count($genres))
                    <option value="tous">Tous les films</option> 
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                        @endforeach
                    @endif
                </select>
                <button type="submit" class="btn btn-vert mt-3">Filtrez notre sélection de film comme du beurre de Marrakech.</button>
        </div>
        <div class="row">
            @if (count($films))
                @foreach($films as $film)
                <div class="col-3 pb-3">
                    <div class="card g-0 h-100 bgcard text-center">
                        <img src="{{ $film->img }}" class="card-img-top" height="550vh">
                        <h5 class="card-title pt-3">{{ $film->titre }}</h5>
                        <div class="card-body collapse" id="resume">
                            <p class="textcharcoal">{{ $film->resume }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-jaune align-bottom">Buzzant! <i class="fa-solid fa-magnifying-glass"></i></a>
                            <button class="btn btn-vert" type="button" data-bs-toggle="collapse" data-bs-target="#resume" aria-expanded="false" aria-controls="collapseExample">
                                Synopsis <i class="fa-solid fa-scroll"></i>
                            </button>
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
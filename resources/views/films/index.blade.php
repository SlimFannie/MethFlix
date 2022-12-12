@extends('layouts.app')

    @section('contenu')
    <div class="container-fluid bg g-0">
        <div class="row text-center g-0">
            <h3 class="textcharcoal">Enfin l'heure de chiller tranquille!</h3>
            <img src="https://static-prod.adweek.com/wp-content/uploads/2017/08/lays-disjointed-PAGE-2017.jpg" class="img-fluid w-50 mx-auto py-3">
            <h4 class="textcharcoal">On regarde tu un film?</h4>
        </div>
        <div class="row text-center py-3 g-0">
            <div class="col-12 text-center">
                <select name="id" id="filtre">
                    @if (count($genres))
                    <option value="tous">Tous les films</option> 
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                        @endforeach
                    @endif
                </select>
                <button type="submit" class="btn btn-vert">Filtrez notre sélection de film comme du beurre de Marrakech.</button>
            </div>
        </div>
        <div class="row g-0">
            @if (count($films))
                @foreach($films as $film)
                <div class="col-3 pb-3">
                    <div class="card h-100 bgcard text-center">
                        <img src="{{ $film->img }}" class="card-img-top" height="550vh">
                        <h5 class="card-title pt-3">{{ $film->titre }}</h5>
                        <div class="card-body collapse" id="resume">
                            <p class="textcharcoal">{{ $film->resume }}</p>
                            <a href="{{ route('films.edit', [$film->id]) }}">Modifier le film</a>
                            <form method="POST" action="{{ route('films.destroy', [$film->id]) }}">
                                 @csrf
                                 @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('films.show', [$film->id]) }}" class="btn btn-jaune align-bottom">Buzzant! <i class="fa-solid fa-magnifying-glass"></i></a>
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
@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Methflix - Modifier {{ $film->titre }}</title>
    </head>
    <body>
        @section('contenu')
        @if (isset($film))
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-4 col-lg-4 col-12">
                    <form method="POST" action="{{ route('films.update', [$film->id]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="titreFilm" class="textbleu">Titre du film :</label>
                            <input type="text" class="form-control" id="titreFilm" value="{{ old('titre', $film->titre) }}" name="titre">
                        </div>
                        <div class="form-group">
                            <label for="resumeFilm" class="textbleu">Résumé du film :</label>
                            <textarea class="form-control" id="resumeFilm" value="{{ old('resume', $film->resume) }}" name="resume"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="anneeFilm" class="textbleu">Année de parution initiale :</label>
                            <input type="number" min="1895" max="2023" step="1" class="form-control" id="anneeFilm" name="annee" value="{{ old('annee', $film->annee) }}">
                        </div>
                        <div class="form-group">
                            <label for="paysFilm" class="textbleu">Pays de production :</label>
                                <select id="paysFilm" name="origine_id" class="form-control">
                                @if (count($origines))
                                    @foreach($origines as $origine)
                                        <option value="{{ $origine->id }}">{{ $origine->pays }}</option>
                                    @endforeach
                                @endif
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="minutesFilm" class="textbleu">Durée (en minutes) :</label>
                            <input type="number" min="1" max="999" step="1" class="form-control" id="dureeFilm" name="minutes" value="{{ old('minutes', $film->minutes) }}">
                        </div>
                        <div class="form-group">
                            <label for="imgFilm" class="textbleu">Image du film (url se terminant par .jpg, .png ou un autre format d'image) :</label>
                            <input type="text" class="form-control" id="imgFilm" value="{{ old('img', $film->img) }}" name="img">
                        </div>
                        <button type="submit" class="btn btn-vert mt-3">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </body>
</html>
@stop
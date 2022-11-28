@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Methflix - Ajout d'un film</title>
    </head>
    <body>
        @section('contenu')
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-4 col-lg-4 col-12">
                    <h4 class="textbleu text-center">Hein, quoi? Ton film est pas là? <i class="fa-regular fa-face-angry"></i></h4>
                    <h5 class="textbleu text-center">Ajoute-le si t'es encore capable!</h5>
                    <form method="post" action="{{ route('films.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="titreFilm" class="textbleu">Titre du film :</label>
                            <input type="text" class="form-control" id="titreFilm" placeholder="Le meilleur film du monde" name="titre">
                        </div>
                        <div class="form-group">
                            <label for="resumeFilm" class="textbleu">Résumé du film :</label>
                            <textarea class="form-control" id="resumeFilm" placeholder="C'est l'histoire d'un gars" name="resume"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="anneeFilm" class="textbleu">Année de parution initiale :</label>
                            <input type="number" min="1895" max="2023" step="1" class="form-control" id="anneeFilm" name="annee">
                        </div>
                        <div class="form-group">
                            <label for="paysFilm" class="textbleu">Pays de production :</label>
                                <select id="paysFilm" name="paysFilm" class="form-control">
                                @if (count($origines))
                                    @foreach($origines as $origine)
                                        <option value="{{ $origine->id }}">{{ $origine->pays }}</option>
                                    @endforeach
                                @endif
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="minutesFilm" class="textbleu">Durée (en minutes) :</label>
                            <input type="number" min="1" max="999" step="1" class="form-control" id="dureeFilm" name="minutes">
                        </div>
                        <div class="form-group">
                            <label for="imgFilm" class="textbleu">Image du film (url se terminant par .jpg, .png ou un autre format d'image) :</label>
                            <input type="text" class="form-control" id="imgFilm" placeholder="poster_de_film.jpg" name="img">
                        </div>
                        <button type="submit" class="btn btn-vert mt-3">Ajouter mon film <i class="fa-regular fa-face-laugh-wink"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@stop
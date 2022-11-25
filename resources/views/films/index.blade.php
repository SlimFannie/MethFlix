@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methflix</title>
</head>
<body>
    @section('contenu')
    <div class="container-fluid">
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
</body>
</html>
@stop
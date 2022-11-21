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
                <div class="col-3 pb-2">
                    <div class="card g-0">
                        <img src="{{ $film->img }}" class="card-img-top" height="500vh">
                        <div class="card-body bgcard">
                            <h5 class="card-title">{{ $film->titre }}</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
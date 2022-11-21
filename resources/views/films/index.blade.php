@extends('app')

@section('contenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h1>Voici la liste des films</h1>
            
            @if (count($film))
                @foreach($film as $film)
                    <div class="col-3">
                        <img src="{{ $film->img }}" width="250">
                        <h4>{{ $film->titre }}</h4>
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
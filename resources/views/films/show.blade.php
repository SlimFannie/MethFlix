@extends('layouts.app')
@section('titre', 'film')

@section('contenu')
<h1>Page du film {{ $film->titre }}</h1>
@if (isset($film))
    <li>{{ $film->titre}}</li>
    <li>{{ $film->annee}}</li>
    <li>{{ $film->minutes}}</li>
@else
    <p>Ce film n'existe pas</p>
@endif

@endsection
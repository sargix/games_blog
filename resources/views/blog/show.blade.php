@extends('layout.main')

@section('content')
    <div class="container pt-3"></div>
    <h1>{{ $game[0]->title }}</h1>
    <div class="container pt-3"></div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Identyfikator: {{ $game[0]->id }}.</h4>
            <h2 class="card-title">Tytuł: {{ $game[0]->title }}</h2>
            <h5 class="card-title">Gatunek: {{ $game[0]->genre }}</h5>
            <h5 class="card-title">Wydawca: {{ $game[0]->publisher }}</h5>
            <h5 class="card-title">Platformy: {{ $game[0]->platform }}</h5>
            <h5 class="card-title">Data wydania: {{ $game[0]->publicate_date }}</h5>
            <p class="card-text">Opis: {{ $game[0]->description }}</p>
            <a href="{{ route('games.list') }}" class="btn btn-dark">Powrót</a>
        </div>
    </div>
@endsection
@extends('layout.main')

@section('content')
<div class="container pt-3"></div>
@if (!empty($message))
<div class="alert alert-primary">
    {{ $message }}
  </div>
@endif
<div class="container pt-3"></div>
<h1>Lista gier</h1>
    @foreach ($games as $game)
    <div class="container pt-3"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nr: {{ $loop->iteration }}.</h4>
                        <h2 class="card-title">Tytuł: {{ $game->title }}</h2>
                        <h5 class="card-title">Gatunek: {{ $game->genre }}</h5>
                        <h5 class="card-title">Wydawca: {{ $game->publisher }}</h5>
                        <h5 class="card-title">Platformy: {{ $game->platform }}</h5>
                        <h5 class="card-title">Data wydania: {{ $game->publicate_date }}</h5>
                        <p class="card-text">Opis: {{ $game->description }}</p>
                        <a href="#" class="card-link">Edytuj</a>
                        <a href="{{ route('game.show', $game->id) }}" class="card-link">Zobacz</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
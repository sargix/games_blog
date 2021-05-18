@extends('layout.main')

@section('content')
    <div class="container pt-3"></div>
    <h1>Wyszukiwarka gier</h1>
    <div class="container pt-3"></div>
    <form action="{{ route('game.search') }}" method="post">
        <div class="form-group">
            <label for="search">Wyszukaj grę:</label>
            <input type="text" class="form-control" placeholder="Wpisz tytuł" name="search">
        </div>
        <button type="submit" class="btn btn-primary">Wyszukaj</button>
    </form>
    
    <div class="container pt-3"></div>

    @if (!empty($searchGames))
        <h3>Znaleziono wyników: {{ $countResults }}</h3>
        @foreach ($searchGames as $game)
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
        @else
        <div></div>
    @endif
@endsection

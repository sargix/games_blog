@extends('layout.main')

@section('content')
    @foreach ($games as $game)
    <div class="container pt-3"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $loop->iteration }}</h2>
                        <h3 class="card-title">{{ $game->title }}</h3>
                        <h5 class="card-title">{{ $game->genre }}</h5>
                        <h5 class="card-title">{{ $game->publisher }}</h5>
                        <h5 class="card-title">{{ $game->platform }}</h5>
                        <h5 class="card-title">{{ $game->publicate_date }}</h5>
                        <p class="card-text">{{ $game->description }}</p>
                        <a href="#" class="card-link">Edytuj</a>
                        <a href="#" class="card-link">Zobacz</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
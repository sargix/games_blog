@extends('layout.main')

@section('content')
<div class="container pt-3"></div>
<h1>Edycja gry</h1>
<div class="container pt-3"></div>
<form action="{{ route('game.edit', $id) }}" method="post">
    <div class="form-group">
        <label for="title">Tytuł gry:</label>
        <input type="text" class="form-control" placeholder="Wpisz tytuł" name="title">
    </div>
    <div class="form-group">
        <label for="genre">Gatunek gry:</label>
        <input type="text" class="form-control" placeholder="Wpisz gatunek" name="genre">
    </div>
    <div class="form-group">
        <label for="publisher">Wydawca gry:</label>
        <input type="text" class="form-control" placeholder="Wpisz wydawcę" name="publisher">
    </div>
    <div class="form-group">
        <label for="date">Data wydania gry:</label>
        <input type="date" class="form-control" placeholder="Wpisz datę wydania" name="date">
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="ps3" value="PS3"> PS3
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="ps4" value="PS4"> PS4
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="ps5" value="PS5"> PS5
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="pc" value="PC"> PC
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="x360" value="X360"> X360
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="xone" value="XONE"> XONE
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="xsx/s" value="XSX/S"> XSX/S
        </label>
    </div>
    <div class="form-group">
        <label for="description">Opis gry:</label>
        <input type="text" class="form-control" placeholder="Wpisz opis" name="description">
    </div>
      <button type="submit" class="btn btn-primary">Edytuj</button>
</form>
@endsection

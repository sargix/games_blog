<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="{{ route('games.list') }}">Games World</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('games.bestList') }}">Lista najlepszych gier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('game.add') }}">Dodaj grę</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('game.search') }}">Wyszukaj grę</a>
        </li>    
      </ul>
    </div>  
  </nav>
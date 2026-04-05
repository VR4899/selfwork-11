<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        {{-- HOME --}}
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="{{ route('article.index') }}">Tutti gli Articoli</a>  
        </li>

  
      
 @guest
      {{-- REGISTRATI --}}
          <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
      </li>

      {{-- ACCEDI --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
      </li>
 
      @endguest    

 @auth
 {{-- CREATE ARTICLE --}}

      <li class="nav-item">
          <a class="nav-link" href="{{ route('article.create') }}">Crea Articolo</a>
        </li>
      </li>

      {{-- LOGOUT --}}
         <li class="nav-item">
        <form  action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="nav-link" type="submit" >Logout</button>
        </form>
      </li>

  @endauth


      
      
      
    </ul>
  </div>
</div>
</nav>
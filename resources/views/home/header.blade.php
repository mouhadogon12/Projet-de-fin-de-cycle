<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#">Sen Concours.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home.page') }}">Acceuil</a></li>
          <li><a class="nav-link scrollto active" href="{{ route('autre.concours') }}">Liste concours</a></li>


          @if (Route::has('login'))

              @auth
              <li><a class="getstarted scrollto" href="{{ route('dossier.candidat') }}">Mes candidatures</a></li>


            <x-app-layout>
            </x-app-layout>

              @else
                  <li><a class="getstarted scrollto" href="{{ route('register') }}">S'inscrire</a></li>
                  <li><a class="getstarted scrollto" href="{{ route('login') }}">Se connecter</a></li>

              @endauth

      @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

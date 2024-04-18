<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 class="display-4">Bienvenue sur la Plateforme de Concours</h1>
            <p class="lead">Trouvez et participez aux concours d'entrée aux établissements d'enseignement supérieur de votre choix.</p>
            <hr class="my-4">
            <div class="mt-3">

                @if (Route::has('login'))
                @auth
                @else
                <p>Pour commencer, connectez-vous ou créez un compte.</p>
                <a class="btn-get-started scrollto" href="{{ route('login') }}">Se connecter</a></li>
                <a class="btn-get-started scrollto" href="{{ route('register') }}">S'inscrire</a></li>
                @endauth
        @endif



            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/Concours.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>

  </section><!-- End Hero -->

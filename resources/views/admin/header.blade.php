<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Panel Administration</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.acceuil') }}">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('concours.index') }}">Gestion des Concours</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('candidats') }}">Gestion des Candidats</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('etablissement.index') }}">Gestion des etablissement</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ route('dashboardEta') }}">Tableau de bord</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.show') }}">Profil</a>
            </li>
            <li class="nav-item" style="margin-top: 8px">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Déconnexion') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </div>
</nav>

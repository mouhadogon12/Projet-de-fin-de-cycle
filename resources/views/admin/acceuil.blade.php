<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Établissement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">

        a{
            font-size: 18x;

            padding: 30px;
        }
        body{
            background-color:#E2E9C0;
        }
        .banner {
    background-image: url('../images/banner.jpg'); /* Chemin vers l'image de la bannière */
    background-size: cover; /* Redimensionner l'image pour couvrir la bannière */
    background-position: center; /* Centrer l'image dans la bannière */
    height: 300px; /* Hauteur de la bannière */
}
    </style>
</head>
<body>

   @include('admin.header')

    <!-- Contenu de la page -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Concours 1</h5>
                        <p class="card-text">Description du concours 1.</p>
                        <a href="#" class="btn btn-primary">Voir détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Concours 2</h5>
                        <p class="card-text">Description du concours 2.</p>
                        <a href="#" class="btn btn-primary">Voir détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Concours 3</h5>
                        <p class="card-text">Description du concours 3.</p>
                        <a href="#" class="btn btn-primary">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


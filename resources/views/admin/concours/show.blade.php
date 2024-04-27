<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">

        a{
            font-size: 18x;

            padding: 30px;
        }
        body{
            background-color:#E2E9C0;
        }
    </style>
    <title>Document</title>
</head>
<body>
@include('admin.header')

<div class="container" style="margin-top: 60px ">
    <div class="row">

        <div class="col-md-12">
            <div class="container">
                <div  class="d-flex justify-content-center" >
                    <h1> <span>{{ $concours->titre }}</span></h1>

                </div>
                <div class="d-flex justify-content-center" >
                    <img class="img-fluid rounded-start" style="object-fit: cover;" src="{{ asset('storage/images/' . $concours->image) }}" alt="Logo">

                </div>


                <p>Description : {{ $concours->description }}</p>
                <p>Date de début d'inscription : {{ $concours->date_debutIns }}</p>
                <p>Date limite d'inscription : {{ $concours->date_limiteIns }}</p>
                <!-- Ajoutez d'autres détails du concours au besoin -->

                <h2>Établissement associé :</h2>
                <p>Nom : {{ $concours->etablissement->nom }}</p>
                <p>Adresse : {{ $concours->etablissement->adresse }}</p>
                <p>Contact : {{ $concours->etablissement->contact }}</p>
                <!-- Ajoutez d'autres informations sur l'établissement au besoin -->
            </div>

          </div>
          </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

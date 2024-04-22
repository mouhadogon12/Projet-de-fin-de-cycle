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
    </style>
</head>
<body>

@include('admin.header')

    <!-- Contenu de la page -->
   <h1>Candidature</h1>
   <div class="container" style="margin-top: 60px ">
    <div class="row">

        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success text-center my-2">{{ session()->get('success') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2 style="margin-top: 9px">Gestion des candidats</h2>
                    <a href="#" class="btn btn-success btn-sm " title="Add New Student" style="  float: right" >
                        <i class="fa fa-plus" aria-hidden="true"></i>Ajouter candidat
                    </a>
                </div>
                <div class="card-body">




                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Série de bac</th>
                                    <th>Moyenne bac</th>
                                    <th>Année bac</th>
                                    <th>Action</th>
                                    <!-- Ajoutez d'autres en-têtes au besoin -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($candidats as $candidat)
                                <tr>
                                    <td>{{ $candidat->user->id}}</td>
                                    <td>{{ $candidat->user->name}}</td>
                                    <td>{{ $candidat->user->email}}</td>
                                    <td>{{ $candidat->seriebac }}</td>
                                    <td>{{ $candidat->moybac }}</td>
                                    <td>{{ $candidat->annebac }}</td>
                                    <!-- Ajoutez d'autres colonnes au besoin -->
                                    <td style="display: flex">
                                        <div class="d-inline">
                                            <form method="POST" action="#" accept-charset="UTF-8" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Vous etes sure?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>


                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

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

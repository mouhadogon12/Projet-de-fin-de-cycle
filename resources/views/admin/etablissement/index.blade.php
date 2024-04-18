<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Établissement</title>
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

<h2>Page de gestion des etablissement</h2>

    <!-- Contenu de la page -->


    <div class="container" style="margin-top: 60px ">
        <div class="row">

            <div class="col-md-12">
                @if (session()->has('success'))
                <div class="alert alert-success text-center my-2">{{ session()->get('success') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2 style="margin-top: 9px">Gestion des Etablissement</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('etablissement.create') }}" class="btn btn-success btn-sm" title="Add New Student" style="  float: right">
                            <i class="fa fa-plus" aria-hidden="true"></i>Ajouter Etablissement
                        </a>

                      <br>
                    </br>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Nom</th>
                                        <th>Adresse</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($etablissements as $etablissement)
                                    <tr>
                                        <td>{{ $etablissement->id }}</td>
                                        <td>{{ $etablissement->nom }}</td>
                                        <td>{{ $etablissement->adresse }}</td>
                                        <td>{{ $etablissement->contact }}</td>




                                        <td>
                                            <div class="d-inline">
                                                <a href="#" title="View Student">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detail</button>
                                                </a>
                                            </div>
                                            <div class="d-inline">
                                                <a href="#" title="Edit Student">
                                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button>
                                                </a>
                                            </div>
                                            <div class="d-inline">
                                                <form method="POST" action="{{ route('etablissement.destroy', $etablissement->id) }}" accept-charset="UTF-8" class="d-inline">
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



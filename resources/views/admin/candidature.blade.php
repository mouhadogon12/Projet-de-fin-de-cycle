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
   <center>
    <span class="badge badge-secondary" style="margin-top: 20px"><h2>Candidature</h2></span></h1>
   </center>
   <div class="container" style="margin-top: 60px ">
    <div class="row">

        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success text-center my-2">{{ session()->get('success') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2 style="margin-top: 9px">Gestion des candidats</h2>

                </div>
                <div class="card-body">




                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Série de bac</th>
                                    <th>Relevé bac</th>
                                    <th>Année bac</th>
                                    <th>Concours</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($candidats as $candidat)
                                <tr>
                                    <td>{{ $candidat->user->id }}</td>
                                    <td>{{ $candidat->user->name }}</td>
                                    <td>{{ $candidat->user->email }}</td>
                                    <td>{{ $candidat->seriebac }}</td>
                                    <td>
                                        <a href="{{ route('admin.view_releve', $candidat->id) }}" class="btn btn-primary"><i class="fa fa-file"></i> Voir relevé</a>
                                    </td>
                                    <td>{{ $candidat->annebac }}</td>
                                    <td>{{ $candidat->concours->titre }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('admin.approve', $candidat->id) }}" method="POST" class="mr-2">
                                                @csrf
                                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Approuver</button>
                                            </form>
                                            <form action="{{ route('admin.reject', $candidat->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> Rejeter</button>
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

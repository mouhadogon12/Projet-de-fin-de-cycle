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
            @if (session()->has('success'))
            <div class="alert alert-success text-center my-2">{{ session()->get('success') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2 style="margin-top: 9px">Gestion des concours</h2>
                    <a href="{{ route('concours.create') }}" class="btn btn-success btn-sm " title="Add New Student" style="  float: right" >
                        <i class="fa fa-plus" aria-hidden="true"></i>Ajouter concours
                    </a>
                </div>
                <div class="card-body">




                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nom</th>
                                    <th>Etablissement</th>
                                    <th>Description</th>
                                    <th>Date debut</th>
                                    <th>Date fin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($concours as $concours)
                                <tr>
                                    <td>{{ $concours->id }}</td>
                                    <td>{{ $concours->nom }}</td>
                                    <td>{{ $concours->etablissement->nom }}</td>
                                    <td>  <div>
                                        <p>{{ substr($concours->description, 0, 100) }}</p>
                                        @if(strlen($concours->description) > 100)
                                            <p id="fullDescription_{{ $concours->id }}" style="display: none;">{{ $concours->description }}</p>
                                            <button onclick="toggleVisibility({{ $concours->id }})">Voir plus</button>
                                        @endif
                                    </div></td>
                                    <td>{{ $concours->date_debut }}</td>
                                    <td>{{ $concours->date_fin }}</td>


                                    <td style="display: flex">
                                        <div class="d-inline">
                                            <a href="#" title="View Student">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detail</button>
                                            </a>
                                        </div>
                                        <div class="d-inline">
                                            <a href="{{ route('concours.edit', $concours->id) }}" title="Edit Student">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button>
                                            </a>
                                        </div>
                                        <div class="d-inline">
                                            <form method="POST" action="{{ route('concours.destroy', $concours->id) }}" accept-charset="UTF-8" class="d-inline">
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
<script>
         function toggleVisibility(id) {
        var fullDescription = document.getElementById("fullDescription_" + id);
        if (fullDescription.style.display === "none") {
            fullDescription.style.display = "block";
        } else {
            fullDescription.style.display = "none";
        }
    }
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

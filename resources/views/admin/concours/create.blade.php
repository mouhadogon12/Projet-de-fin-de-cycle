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

<!-- create.blade.php -->
<div class="container mt-8 mx-auto mt-5 justify-content-center">
    <div class="row ">
        <div class="col-md-12">


                <div class="card-header">
                    <h4 class="mb-0" >Ajouter concours</h4>
                    <div class="text-right" style="margin-top: -25px">
                        <a href="#" class="btn btn-primary " >Back</a>
                    </div>
            <div class="card-body">
                <form action="{{ route('concours.store') }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="titre">titre</label>
                        <input type="text" name="titre" class="form-control" id="titre" value="{{ old('titre') }}">
                        @error('titre') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="etablissement_id">Établissement</label>
                        <select name="etablissement_id" class="form-control" id="etablissement_id" required>
                            <option value="">Sélectionnez un établissement</option>
                            @foreach($etablissements as $etablissement)
                                <option value="{{ $etablissement->id }}">{{ $etablissement->nom }}</option>
                            @endforeach
                        </select>
                        @error('etablissement_id') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="Description">Description</label>
                       <textarea name="description" class="form-control" id="" cols="30" rows="3">{{ old('description') }}</textarea>
                       @error('description') <span class="text-danger">{{ $message }}</span>

                       @enderror
                    </div>
                    <div class="mb-2">
                        <label for="lien">lien</label>
                        <input type="text" name="lien" class="form-control" id="lien" value="{{ old('lien') }}">
                        @error('lien') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="date_debutIns">Date debut</label>
                        <input type="date" name="date_debutIns" class="form-control" id="date_debutIns" value="{{ old('date_debutIns') }}">
                        @error('date_debutIns') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="date_limiteIns">Date cloture</label>
                        <input type="date" name="date_limiteIns" class="form-control" id="date_limiteIns" value="{{ old('date_limiteIns') }}">
                        @error('date_limiteIns') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>




                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

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
                    <h4 class="mb-0" >Modifier concours</h4>
                    <div class="text-right" style="margin-top: -25px">
                        <a href="#" class="btn btn-primary " >Back</a>
                    </div>
            <div class="card-body">
                <form action="{{ route('concours.update',$concours->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-2">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" value="{{ $concours->nom }}">
                        @error('nom') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="Description">Description</label>
                       <textarea name="description" class="form-control" id="" cols="30" rows="3">{{ $concours->description }}</textarea>
                       @error('description') <span class="text-danger">{{ $message }}</span>

                       @enderror
                    </div>
                    <div class="mb-2">
                        <label for="date_debut">Date debut</label>
                        <input type="date" name="date_debut" class="form-control" id="date_debut" value="{{ $concours->date_debut }}">
                        @error('date_debut') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="date_fin">Date fin</label>
                        <input type="date" name="date_fin" class="form-control" id="date_fin" value="{{ $concours->date_fin }}">
                        @error('date_fin') <span class="text-danger">{{ $message }}</span>

                        @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Modifier</button>
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

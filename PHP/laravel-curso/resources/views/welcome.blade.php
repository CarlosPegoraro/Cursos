<<<<<<< Updated upstream
@extends('layouts.main')

@section('title', "HDC Events")

@section('content')
    <form action="" method="get">
        <div class="mb-3 mt-3 row">
            <label for="name" class="col-sm-2 col-form-label">Digite o seu nome: </label>
            <div class="col-sm-4 col-10 col-lg-10 mb-3">
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <label for="age" class="col-sm-2 col-form-label">Digite sua idade: </label>
            <div class="col-sm-4 col-10 col-lg-10">
                <input type="number" name="age" id="age" class="form-control col-8">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <div class="m-3 row">
            @php
                if ($_GET) {
                    $name = $_GET['name'];
                    $age = $_GET['age'];

                    if ($age >= 18){
                        echo "$name é maior de idade e possui $age anos de idade";
                    } else {
                        echo "$name é menor de idade e possui $age anos de idade";
                    }
                }
            @endphp
        </div>
    </form>
@endsection
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="/css/style.css">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body >
        <h1> aa </h1>

        <!--Javascript-->
        <script src="/js/script.js"></script>
        <!--bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"crossorigin="anonymous"></script>
    </body>
</html>
>>>>>>> Stashed changes

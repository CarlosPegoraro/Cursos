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

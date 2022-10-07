<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- Google Fonts' fonts --}}
    {{-- Roboto --}} <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- Bootstrap's styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    {{-- Local aplication CSS --}}
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="antialiased bg-dark text-light">

    {{-- Header section --}}
    <nav class="navbar navbar-expand-lg bg-light p-3">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand">
                <img src="/img/firefox-brand.svg" alt="HDC Events" srcset="">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Main section --}}
    <div class="container-fluid col-12 col-sm-12 col-lg-12">
        @yield('content')
    </div>

    {{-- Footer section --}}
    <footer>
        <p>HDC Events &copy; 2022</p>
    </footer>

    {{-- Ion Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

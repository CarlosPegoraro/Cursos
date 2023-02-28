<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, this is a blade template</h1>

    <p>a great number is {{ 2 + 2 }}</p>
    <p> the current year is {{ date("Y")}} </p>
    <p>{{$name}}</p>
    <p>{{$catName}}</p>

    <ul>
        @foreach ($allAnimals as $animal)
            <li>{{$animal}}</li>
        @endforeach
    </ul>

    <a href="/about" target="_blank" rel="noopener noreferrer">Go to the about page</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Movie</title>
</head>
<body>
    @include('components.navigation')
    <h1>{{ $movie->name }}</h1>
    <p>{{ $movie->genre }}</p>
    <p>{{ $movie->director }}</p>
    <p>{{ $movie->year }}</p>
    <p>{{ $movie->storyline }}</p>
    <a href="/movies">Back to all movies</a>
    @include('components.footer')
</body>
</html>
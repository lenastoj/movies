<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 5rem;">
        <form action="{{ url('addmovie') }}" method="POST">
            @csrf
        <h1>Add new movie</h1>
        <div class="mb-3">
            <label class="form-label">Enter Movie Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Director</label>
            <input type="text" class="form-control" id="director" name="director" placeholder="Director" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Year</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Year" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Storyline</label>
            <textarea class="form-control" name="storyline" id="storyline" cols="30" placeholder="Storyline" required></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Add movie</button>
        </form>
    </div>
</body>
</html>
@extends('layout.default')

@section('content')
    <div class="container" style="margin-top: 5rem;">
        <form action="{{ url('addmovie') }}" method="POST">
            @csrf
        <h1>Add new movie</h1>
        <div class="mb-3">
            <label class="form-label">Enter Movie Title</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Title" required>
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
            <input type="year" class="form-control" id="year" name="year" placeholder="Year" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Storyline</label>
            <textarea class="form-control" name="storyline" id="storyline" cols="30" placeholder="Storyline" required></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Add movie</button>
        </form>
    </div>

    @if ($errors->any()) 
        <div class="container" style="margin-top: 2rem;">
            <ul class="list-group" style="list-style: none;">
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger" >{{ $error }}</li>
                @endforeach
            </ul>
        </div>  
    @endif

    @if (session('status'))
        <div class="container" style="margin-top: 2rem;"    >
            <div class="alert alert-success"> {{ session('status') }}</div>
        </div>
    @endif
@stop
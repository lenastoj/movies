@extends('layout.default')

@section('content')
<div class="container" style="margin-top: 2rem;">
    {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> --}}
        {{-- <div class="col"> --}}
            <div class="card shadow-sm" style="padding: 2rem;">

                <h1>{{ $movie->name }}</h1>
                <p><a href="/genre/{{ $movie->genre }}">{{ $movie->genre }}</a></p>
                <p>{{ $movie->director }}</p>
                <p>{{ $movie->year }}</p>
                <p>{{ $movie->storyline }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                <a href="/movies" class="btn btn-sm btn-outline-secondary">Back to all movies</a>
                </div>
            </div>
        {{-- </div> --}}
    {{-- </div> --}}
</div>

    <div class="container" style="margin-top: 5rem;">
        <form action="{{ url('createcomment') }}" method="POST">
            @csrf
    {{-- <h5>Create new comment</h5> --}}
            <div class="mb-3">
                <label class="form-label">Enter Comment</label>
                <textarea class="form-control" name="content" id="content" cols="30" placeholder="Enter your comment" required></textarea>
                <input type="hidden" name="movie_id" value="{{ $movie->id }}">
            </div>
            <button type="submit" class="btn btn-primary">Post comment</button>
        </form>
    

        @foreach ($movie->comments as $comment)
            <div class="row align-items-md-stretch" style="margin-top: 1rem;">
                <div class="mb-3">
                    <div class="h-100 p-5 text-bg-dark rounded-3">
                        <h4>Comment: {{ $comment->id }}</h4>
                        <p>{{ $comment->content }}</p>
                        {{-- <button class="btn btn-outline-light" type="button">Example button</button>     --}}
                    </div>
                </div>
            <div
        @endforeach
    {{-- </div> --}}


@stop


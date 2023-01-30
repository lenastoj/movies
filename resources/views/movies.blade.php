@extends('layout.default')

@section('content')
  <div class="container" >
    <main style="margin-top: 2rem;">
      <div class="row g-5"> 

        <div class="col-md-8 col-lg-9">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($movies as $movie)
            <div class="col">
              <div class="card shadow-sm">
                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                <div class="card-body">
                  <h3 class="card-text"><a href="/movies/{{ $movie->id }}" style="text-decoration: none;" > {{ $movie->name }}</a></h3>
    
                  <p class="card-text">{{ $movie->storyline }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/movies/{{ $movie->id }}" class="btn btn-sm btn-outline-secondary">View More</a>
                      {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> --}}
                      {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                    </div>
                    {{-- <small class="text-muted">9 mins</small> --}}
                  </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>
        </div>


        <div class="col-md-4 col-lg-3 order-md-last">
          <h4 d-flex justify-content-between align-items center mb-3>Newest movies</h4>
          <ul class="list-group mb-3">
            @foreach ($movies as $movie)
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">{{ $movie->name }}</h6>
                  <small class="text-muted">{{ $movie->genre }}</small>
                </div>
                <span class="text-muted">{{ $movie->year }}</span>
              </li>
            @endforeach
          </ul>
        </div>


      </div>
    </main>

  </div>
@stop

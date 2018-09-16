@extends ('layouts.master')

@section('content')

<div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Laravel Movies
          </h3>

        @foreach($films as $film)
            @include('films.film')
        @endforeach
        
        <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
</div>
@endsection
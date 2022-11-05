@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="card mb-4 bg-secondary text-light">
            <div class="card-body">

                <h5 class="card-title">{{ $article->title }}</h5>
                
                <p class="card-text">{{ $article->body }}</p>
                
                <small class="text-info">

                    {{ $article->created_at->diffForHumans() }}

                </small>

                <a class="btn btn-danger float-end" href="{{ url("/articles/delete/$article->id") }}">
                    Delete
                </a>

            </div>
        </div>
    </div>
    
@endsection
@extends("layouts.app")

@section('content')
    <div class="container">

        @if(session('info'))
            <div class="alert alert-primary">
                {{ session('info') }}
            </div>
        @endif

        {{ $articles->links() }}

        @foreach ($articles as $article)

            <div class="card mb-4 bg-secondary text-light">

                <div class="card-body">

                    <h4>{{ $article->title }}</h4>

                    <p>{{ $article->body }}</p>

                    <small class="text-info">
                        {{ $article->created_at->diffForHumans() }}  
                    </small>

                    <a class="btn btn-info float-end" href="{{ url("/articles/detail/$article->id") }}">
                        View details &raquo;
                    </a>

                </div>

            </div>

        @endforeach

    </div>
@endsection
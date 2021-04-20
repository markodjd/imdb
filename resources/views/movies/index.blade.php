@extends('app')

@section('title', 'Movies')

@section('content')

    <div class="row mt-3">
        @forelse ($movies as $movie)
            <div class="col-6">
                <a href="/movies/{{ $movie->id }}">
                    <h2>{{ $movie->title }}</h2>
                    <p>{{ $movie->storyline }}</p>
                </a>
            </div>
        @empty
            <p>No movies yet.</p>
        @endforelse
    </div>

@endsection

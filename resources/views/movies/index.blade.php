@extends('app')

@section('title', 'Movies')

@section('content')

    <div>
        @forelse ($movies as $movie)
            <div>
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

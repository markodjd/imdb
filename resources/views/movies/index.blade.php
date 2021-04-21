@extends('app')

@section('title', 'Movies')

@section('content')
    <div class="row">
        <div class="col-2">
            @include('sidebar')
        </div>
        <div class="col-9 mt-3">
            <div class="row">
                @forelse ($movies as $movie)
                    <div class="col-6 mb-3">
                        <a class="text-dark text-decoration-none" href="{{ route('movie', ['movie' => $movie->id]) }}">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h2>{{ $movie->title }}</h2>
                                </div>
                                <div class="card-body">
                                    <p>{{ Str::limit($movie->storyline, 100, '...') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No movies yet.</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

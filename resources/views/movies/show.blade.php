@extends('app')

@section('title', $movie->title)

@section('content')

    <div class="row mt-3">
        <div class="col-6">
            <h2>{{ $movie->title }} ({{ date('d.m.Y', strtotime($movie->release_date)) }}) <small
                    class="text-muted fs-6">{{ $movie->genre }}</small></h2>
            <p><strong>Director: </strong>{{ $movie->director }}</p>
            <p>{{ $movie->storyline }}</p>
        </div>
    </div>

@endsection

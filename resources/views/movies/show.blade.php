@extends('app')

@section('title', $movie->title)

@section('content')

    <div class="row mt-3">
        <div class="col-6">
            <h2>{{ $movie->title }} ({{ date('d.m.Y', strtotime($movie->release_date)) }}) <small
                    class="text-muted fs-6"><a class="text-decoration-none"
                        href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a></small></h2>
            <p><strong>Director: </strong>{{ $movie->director }}</p>
            <p>{{ $movie->storyline }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <h3>Comments</h3>
            @forelse ($movie->comments as $comment)
                <p>{{ $comment->content }}</p>
            @empty
                <p>No comments.</p>
            @endforelse
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <form action="/movies/{{ $movie->id }}/comments" method="POST" class="mw-50">
                @csrf
                <div class="form-row">
                    <input type="hidden" name="movie_id" value={{ $movie->id }}>
                    <div class="form-group mt-3">
                        <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content"
                            name="content" placeholder="Your comment..."></textarea>
                        @error('content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

@endsection

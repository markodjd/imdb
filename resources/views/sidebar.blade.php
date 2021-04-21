<div class="row mt-3">
    @forelse ($latest_movies as $movie)
        <div class="mb-2 p-2 border-bottom">
            <a class="text-decoration-none text-dark" href="{{ route('movie', ['movie' => $movie->id]) }}">
                <h5>{{ $movie->title }}</h5>
            </a>
        </div>
    @empty

    @endforelse
</div>

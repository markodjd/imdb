@extends('app')

@section('title', 'Movies')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <form action="/movies" method="POST" class="mw-50">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 mt-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                            placeholder="Movie title">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="genre" name="genre"
                            placeholder="Genre">
                        @error('genre')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <label for="director">Director</label>
                        <input type="text" class="form-control @error('director') is-invalid @enderror" id="director"
                            name="director" placeholder="Director">
                        @error('director')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <label for="release_date">Release date</label>
                        <input type="date" min='1900-01-01' max='{{ date('Y-m-d') }}'
                            class="form-control @error('release_date') is-invalid @enderror" id="release_date"
                            name="release_date">
                        @error('release_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <label for="storyline">Storyline</label>
                        <textarea name="storyline" id="storyline"
                            class="form-control @error('storyline') is-invalid @enderror" rows="10"
                            placeholder="Storyline"></textarea>
                        @error('storyline')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

@endsection

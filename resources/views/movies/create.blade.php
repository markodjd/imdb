@extends('app')

@section('title', 'Movies')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <form class="mw-50">
                <div class="form-row">
                    <div class="form-group col-md-6 mt-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Movie title">
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <label for="director">Director</label>
                        <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <label for="body">Storyline</label>
                        <textarea name="body" id="body" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Sign in</button>
            </form>
        </div>
    </div>

@endsection

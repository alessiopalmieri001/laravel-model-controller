@extends('layouts.app')

@section('page-title', 'tutti i film')

@section('main-content')
<h1>
    film
</h1>

<div class="row">
    @foreach ($movies as $index => $movie)
        <div class="col-12 col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{ $movie->title }}
                    </h3>

                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-primary">
                        Vai al film
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
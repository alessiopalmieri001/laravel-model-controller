@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
<h1 class="text-center">
    {{ $movie->title }}
</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center ">
                <h3>
                    {{ $movie->title }}
                </h3>

                <p>
                    {{ $movie->author }}
                </p>
                <p>
                    {{ $movie->original_title }}
                </p>
                <p>
                    {{ $movie->nationality }}
                </p>
                <p>
                    {{ $movie->date }}
                </p>
                <p>
                    {{ $movie->vote}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
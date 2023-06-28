@extends('layouts.app')

@section('content')
    <div class="mt-5 mb-5 container text-center">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card p-3" style="width: 15rem; height: 18rem">
                    <div class="card-body">
                        <h4 class=""> {{ $movie->original_title }} </h4>
                        <p class="d-flex flex-column flex-nowrap"><strong>Nazionality movies:</strong> {{ $movie->nationality }} </p>
                        <p class="d-flex flex-column flex-nowrap"><strong>Date publish:</strong> {{ $movie->date }} </p>
                        <p class="d-flex flex-column flex-nowrap"><strong>Vote:</strong> {{ $movie->vote }} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
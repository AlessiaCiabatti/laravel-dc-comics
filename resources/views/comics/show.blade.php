@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">{{ $comic->title }}
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
            @include('partials.formdelete')
        </h1>
        {{-- @dump($comic) --}}
        <div class="row">
            <div class="col">
                <img class="mb-4" src="{{ $comic->thumb }}" class="" alt="{{ $comic->thumb }}"
                    style="max-width: 200px;">
                <h4 class="mb-4">Description</h4>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection

@section('title')
    Products
@endsection

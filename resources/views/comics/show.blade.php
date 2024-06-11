@extends('layout.main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}
        </h1>
        {{-- @dump($comic) --}}
        <div class=" show-bg">
            <div class="d-flex justify-content-center ms-2 me-4">
                <div class="description flex-column">
                    <h4 class="mb-4">Description</h4>
                    <p>{{ $comic->description }}</p>
                </div>
                <div>
                    <img class="mb-4" src="{{ $comic->thumb }}" class="" alt="{{ $comic->thumb }}"
                        style="max-width: 400px;">
                </div>
            </div>
            <div class="ms-4">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning"><i
                        class="fa-solid fa-pen text-white"></i></a>
                @include('partials.formdelete')
            </div>
        </div>
    </div>
@endsection

@section('title')
    Products
@endsection

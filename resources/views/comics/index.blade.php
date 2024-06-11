@extends('layout.main')

@section('content')
    <div class="container comics-index">
        <h1>Products list</h1>
        {{-- se esiste una variabile di sessione denominata 'deleted' la stampo nell'alert --}}
        @if (session('deleted'))
            <div class="alert alert-warning" role="alert">
                {{ session('deleted') }}
            </div>
        @endif


        <div class="container index-bg">
            <div class="row row-cols-4">
                @foreach ($products as $comic)
                    <div class="col mb-3">
                        <div class="card border-0 d-flex flex-column justify-content-between shadow mt-3">

                            <img class="img-card" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">


                            <div class="info-comic">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4 class=" title-comic card-title text-center">{{ $comic->title }}</h4>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="mt-4 card-text">Genre: <span>{{ $comic->type }}</span></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">Price: <span>{{ $comic->price }}</span></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">Series: <span>{{ $comic->series }}</span></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text bottom-card">Date sale: {{ $comic->sale_date }}</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body mb-3">
                                {{-- <div class="info-comic">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                    <p class="card-text">Genre: <span>{{ $comic->type }}</span></p>
                                    <p class="card-text">Price: <span>{{ $comic->price }}</span></p>
                                    <p class="card-text">Series: <span>{{ $comic->series }}</span></p>
                                    <p class="card-text">{{ $comic->sale_date }}</p>
                                </div> --}}
                                <div>
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success me-2"><i
                                            class="fa-solid fa-circle-arrow-right"></i></a>
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning text-white me-2"><i
                                            class="fa-solid fa-pen"></i></a>
                                    {{-- metodo delete non get, ho bisogno di un form --}}
                                    @include('partials.formdelete')
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
@endsection

@section('title')
    Comics
@endsection

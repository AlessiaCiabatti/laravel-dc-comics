@extends('layout.main')

@section('content')
    <div class="container comics-index">
        <h1>Elenco prodotti</h1>
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
                        <div class="card border-0 d-flex flex-column justify-content-between">

                                <img class="img-card" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->type }}</p>
                                <p class="card-text">Price: {{ $comic->price }}</p>
                                <p class="card-text">Series: {{ $comic->series }}</p>
                                <p class="card-text">{{ $comic->sale_date }}</p>
                                <div class="d-flex">
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success me-2"><i
                                            class="fa-solid fa-circle-arrow-right"></i></a>
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning me-2"><i
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

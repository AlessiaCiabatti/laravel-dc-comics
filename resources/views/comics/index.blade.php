@extends('layout.main')

@section('content')

    <div class="container my-5">
        <h1>Elenco prodotti</h1>

        <div class="container my-5">
            <div class="row row-cols-4">
                @foreach ($products as $product)
                    <div class="col mb-3">
                        <div class="card border-0 d-flex flex-column justify-content-between" style="min-height: 550px;">
                            <div class="d-flex justify-content-center align-items-center" style="height: 400px; overflow: hidden;">
                                <img src="{{ $product->thumb }}" class="img-fluid" alt="{{ $product->title }}" style="max-height: 100%;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ $product->type }}</p>
                                <p class="card-text">Price: {{ $product->price }}</p>
                                <p class="card-text">Series: {{ $product->series }}</p>
                                <p class="card-text">{{ $product->sale_date }}</p>
                                <a href="{{ route('comics.show', $product->id) }}"><i class="fa-solid fa-circle-arrow-right"></i></a>
                                <a href="{{ route('comics.edit', $product->id) }}"><i class="fa-solid fa-pen"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>

@endsection

@section('title')
    Products
@endsection

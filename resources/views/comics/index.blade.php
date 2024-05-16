@extends('layout.main')

@section('content')

    <div class="container my-5">
        <h1>Elenco prodotti</h1>

        <div class="container my-5 ">
            <div class="row row-cols-4">
                @foreach ($products as $product)
                    <div class="col mb-3">
                        <div class="card d-flex justify-content-center align-items-center" style="min-height: 550px;">
                            <img src="{{ $product->thumb }}" class="" alt="{{ $product->thumb }}" style="max-width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ $product->type }}</p>
                                <p class="card-text">Price: {{ $product->price }}</p>
                                <p class="card-text">Series: {{ $product->series }}</p>
                                <p class="card-text">{{ $product->sale_date }}</p>
                                <a href="{{route('comics.show', $product->id)}}"><i class="fa-solid fa-circle-arrow-right"></i></a>
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

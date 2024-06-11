@extends('layout.main')

@section('content')

<div class="container">

    <h1>Home</h1>
    <div class="home-bg">
        <p>In our store, we have {{$num_products}} products. Discover them now, click here!</p>

        <div class="d-flex">
            <div class="arrow">
                <img src="https://static.vecteezy.com/system/resources/previews/008/792/884/large_2x/quirky-comic-book-style-cartoon-arrow-vector.jpg" alt="">
            </div>

            <div class="ms-5">
                <a href="{{ route('comics.index') }}" class="glow-on-hover d-flex justify-content-center align-items-center" type="button">CLICK ME!</a>
            </div>
        </div>

    </div>

</div>

@endsection

@section('title')
    Home
@endsection

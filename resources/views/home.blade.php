@extends('layout.main')

@section('content')

<div class="container my-5">
    <h1>Home</h1>
    <p>Nel nostro store abbiamo {{$num_products}} prodotti</p>
</div>

@endsection

@section('title')
    Home
@endsection

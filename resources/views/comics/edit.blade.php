@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-8">
{{-- @dump($comic) --}}
                @php
                $status = 'test';
                    $title = '';
                    $thumb = '';
                    $type = '';
                    $price = '';
                    $series = '';
                    $sale_date = '';
                    $description = '';

                    if( $status === 'test'){
                    $title = 'comic test';
                    $thumb = 'prova';
                    $type = 'prova';
                    $price = 'prova';
                    $series = 'prova';
                    $sale_date = 'prova';
                    $description = 'prova prova prova';
                    }
                @endphp

                <form action="{{ route('comics.update', $comic) }}" method="post">
                    {{-- tutti i nostri form deve essere presente @csrf --}}
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image (src)</label>
                        <input name="thumb" type="text" class="form-control" id="src" value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" type="text" class="form-control" id="type" value="{{ $comic->type }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control" id="series" value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input name="sale_date" type="date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" type="textarea" class="form-control" id="description" value="{{ $comic->description }}"></textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Modify the product</button>
                    <button class="btn btn-warning" type="reset">Reset</button>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('title')
    New Product
@endsection

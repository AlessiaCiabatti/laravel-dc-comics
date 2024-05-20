@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>New Product</h1>

        {{-- alert --}}

        <div class="alert alert-danger" role="alert">
           {{-- metodo $errors->any() restituisce true se ci sono errori --}}
           @if ($errors->any()){
            {{-- $errors->all() restituisce array con tutti errori --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
           }

           @endif

        </div>

        <div class="row">
            <div class="col-8">

                @php
                    $status = 'prod';
                    $title = '';
                    $thumb = '';
                    $type = '';
                    $price = '';
                    $series = '';
                    $sale_date = '';
                    $description = '';

                    if ($status === 'test') {
                        $title = 'comic test';
                        $thumb = 'prova';
                        $type = 'prova';
                        $price = 'prova';
                        $series = 'prova';
                        $sale_date = 'prova';
                        $description = 'prova prova prova';
                    }
                @endphp

                <form action="{{ route('comics.store') }}" method="post">
                    {{-- tutti i nostri form deve essere presente @csrf --}}
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title (*)</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ $title }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image (src)</label>
                        <input name="thumb" type="text" class="form-control" id="src"
                            value="{{ $thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type (*)</label>
                        <input name="type" type="text" class="form-control" id="type"
                            value="{{ $type }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price (*)</label>
                        <input name="price" type="text" class="form-control" id="price"
                            value="{{ $price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control" id="series"
                            value="{{ $series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date (*)</label>
                        <input name="sale_date" type="date" class="form-control" id="sale_date"
                            value="{{ $sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description (*)</label>
                        <textarea name="description" class="form-control" type="textarea" class="form-control" id="description">{{ $description }}</textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Add new product</button>
                    <button class="btn btn-warning" type="reset">Reset</button>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('title')
    New Product
@endsection

@extends('layout.main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }} @include('partials.formdelete')</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="edit-bg">
            <div class="form-edit">
                {{-- @dump($comic) --}}


                <form action="{{ route('comics.update', $comic) }}" method="post">
                    {{-- tutti i nostri form deve essere presente @csrf --}}
                    @csrf
                    {{-- put sovrascrive tutti gli elementi in update solitamente si usa, patch sostituisce il dato singolo --}}
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title (*)</label>
                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            id="title" value="{{ old('title', $comic->title) }}">

                        @error('title')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image (src)</label>
                        <input name="thumb" type="text" class="form-control @error('src') is-invalid @enderror"
                            id="src" value="{{ old('thumb', $comic->thumb) }}">
                        @error('thumb')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type (*)</label>
                        <input name="type" type="text" class="form-control @error('type') is-invalid @enderror"
                            id="type" value="{{ old('type', $comic->type) }}">
                        @error('type')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price (*)</label>
                        <input name="price" type="text" class="form-control @error('price') is-invalid @enderror"
                            id="price" value="{{ old('price', $comic->price) }}">
                        @error('price')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control @error('series') is-invalid @enderror"
                            id="series" value="{{ old('series', $comic->series) }}">
                        @error('series')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date (*)</label>
                        <input name="sale_date" type="date" class="form-control @error('sale_date') is-invalid @enderror"
                            id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                        @error('sale_date')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description (*)</label>
                        <textarea name="description" class="form-control" type="textarea"
                            class="form-control @error('description') is-invalid @enderror" id="description"
                            value="{{ old('description', $comic->description) }}"></textarea>
                        @error('description')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
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

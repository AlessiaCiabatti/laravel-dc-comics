@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>New Product</h1>

        {{-- alert --}}

        <div class="alert alert-danger" role="alert">
            {{-- metodo $errors->any() restituisce true se ci sono errori --}}
            {{-- $errors->all() restituisce array con tutti errori --}}
            @if ($errors->any())
                {
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

                <form action="{{ route('comics.store') }}" method="post">
                    {{-- tutti i nostri form deve essere presente @csrf --}}
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title (*)</label>
                        {{-- gli passo la chiave titolo, funziona come un if --}}
                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            id="title" value="{{ old('title') }}">
                        @error('title')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image (src)</label>
                        <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror"
                            id="src" value="{{ old('thumb') }}">
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
                            id="type" value="{{ old('type') }}">
                        @error('type')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price (*)</label>
                        <input name="price" type="text" class="form-control @error('type') is-invalid @enderror"
                            id="price" value="{{ old('price') }}">
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
                            id="series" value="{{ old('series') }}">
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
                            id="sale_date" value="{{ old('sale_date') }}">
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
                            class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">
                                {{-- viene letto il messaggio dentro l'array --}}
                                {{ $message }}
                            </small>
                        @enderror
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

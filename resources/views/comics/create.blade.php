@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>New Product</h1>
        <div class="row">
            <div class="col-8">
                <form action="{{ route('comics.store') }}" method="post">
                    {{-- tutti i nostri form deve essere presente @csrf --}}
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image (src)</label>
                        <input name="thumb" type="text" class="form-control" id="src">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" type="text" class="form-control" id="type">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="text" class="form-control" id="price">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control" id="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input name="sale_date" type="date" class="form-control" id="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" type="textarea" class="form-control" id="description"></textarea>
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

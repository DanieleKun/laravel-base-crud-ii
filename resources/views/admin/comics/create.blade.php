@extends('admin.templates.base')

@section('mainContent')

    <h1>Insert new Comic</h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div>
            <label class="form-label" for="description">Description</label>
            <input class="form-control" type="text" name="description" id="description">
        </div>
        <div>
            <label class="form-label" for="thumb">Img Cover link</label>
            <input class="form-control" type="text" name="thumb" id="thumb">
        </div>
        <div>
            <label class="form-label" for="price">Price</label>
            <input class="form-control" type="currency" name="price" id="price">
        </div>
        <div>
            <label class="form-label" for="series">Series</label>
            <input class="form-control" type="text" name="series" id="series">
        </div>
        <div>
            <label class="form-label" for="sale_date">Sale Date</label>
            <input class="form-control" type="date" name="sale_date" id="sale_date">
        </div>
        <div>
            <label class="form-label" for="type">Type</label>
            <input class="form-control" type="text" name="type" id="type">
        </div>

        <button class="btn btn-primary">Send</button>
    </form>

@endsection
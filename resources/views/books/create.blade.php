@extends('layouts.app')

@section('content')

<h2>Add Book</h2>

<form method="POST" action="/books">
    @csrf

    <input type="text" name="title" placeholder="Title" class="form-control mb-2">

    <input type="text" name="author" placeholder="Author" class="form-control mb-2">

    <input type="text" name="price" placeholder="Price" class="form-control mb-2">

    <textarea name="description" placeholder="Description" class="form-control mb-2"></textarea>

    <button class="btn btn-success">Save</button>
</form>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">

    <h2>📊 Admin Dashboard</h2>

    <a href="/books/create" class="btn btn-primary mb-3">+ Add Book</a>

    @foreach(\App\Models\Book::all() as $book)
    <div class="card mb-3">

        <div class="card-body">

            <h4>{{ $book->title }}</h4>

            <p>{{ $book->author }}</p>

            <p>₹{{ $book->price }}</p>

            <a href="/books/{{ $book->id }}/edit" class="btn btn-warning btn-sm">
                Edit
            </a>

            <a href="/books/{{ $book->id }}/delete" class="btn btn-danger btn-sm">
                Delete
            </a>

        </div>

    </div>
    @endforeach

</div>

@endsection
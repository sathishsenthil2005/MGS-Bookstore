@extends('layouts.app')

@section('content')

<div class="container">

    <h2>📚 Books (User View)</h2>

    @foreach($books as $book)
    <div class="card mb-3">

        <div class="card-body">

            <h4>{{ $book->title }}</h4>

            <p>{{ $book->author }}</p>

            <p>₹{{ $book->price }}</p>

            <!-- ONLY VIEW -->
            <a href="/books/{{ $book->id }}" class="btn btn-info btn-sm">
                View
            </a>

        </div>

    </div>
    @endforeach

</div>

@endsection
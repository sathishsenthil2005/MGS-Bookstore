<h1>Edit Book</h1>

<form method="POST" action="/books/{{ $book->id }}/update">
    @csrf

    <input type="text" name="title" value="{{ $book->title }}"><br><br>
    <input type="text" name="author" value="{{ $book->author }}"><br><br>
    <textarea name="description">{{ $book->description }}</textarea><br><br>
    <input type="number" name="price" value="{{ $book->price }}"><br><br>

    <button type="submit">Update</button>
</form>
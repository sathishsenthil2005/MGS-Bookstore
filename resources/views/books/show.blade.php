<h1>Book Details</h1>

<h2>{{ $book->title }}</h2>
<p><b>Author:</b> {{ $book->author }}</p>
<p><b>Description:</b> {{ $book->description }}</p>
<p><b>Price:</b> ₹{{ $book->price }}</p>

<a href="/books">Back</a>
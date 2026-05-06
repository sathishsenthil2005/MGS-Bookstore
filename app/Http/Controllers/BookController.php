<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'price' => $request->price,
            'available' => true,
        ]);

        return redirect('/books');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect('/books');
    }

    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect('/books');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    public function apiBooks()
{
    $response = Http::withoutVerifying()
        ->get('https://www.googleapis.com/books/v1/volumes?q=laravel');

    $data = $response->json();

    if (isset($data['error'])) {
        $books = []; // fallback
    } else {
        $books = $data;
    }

    return view('books.api', compact('books'));
}

}
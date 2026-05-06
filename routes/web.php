<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home Page (UPDATED 🔥)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home'); // welcome → home change
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Auth + Protected Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | API Route (IMPORTANT → keep above wildcard)
    |--------------------------------------------------------------------------
    */
    Route::get('/api-books', [BookController::class, 'apiBooks']);

    /*
    |--------------------------------------------------------------------------
    | Book CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/books', [BookController::class, 'index']);
    Route::get('/books/create', [BookController::class, 'create']);
    Route::post('/books', [BookController::class, 'store']);

    Route::get('/books/{id}/edit', [BookController::class, 'edit']);
    Route::post('/books/{id}/update', [BookController::class, 'update']);
    Route::get('/books/{id}/delete', [BookController::class, 'destroy']);

    // IMPORTANT → keep this LAST
    Route::get('/books/{id}', [BookController::class, 'show']);
});

require __DIR__.'/auth.php';
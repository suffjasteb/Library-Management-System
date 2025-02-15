<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $books = Book::all(); // Ambil semua data buku
    return view('home', ['title' => 'home page', 'books' => $books] );
});

Route::get('/books', function () {
    return view('books');
});
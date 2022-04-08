<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $authors = Author::get();
        $books = Book::get();

        return view('user.home.index', ['authors' => $authors, 'books' => $books]);
    }
}

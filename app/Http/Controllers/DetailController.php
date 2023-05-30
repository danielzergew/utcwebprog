<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id) {
        $book = Book::find($id);

        return view('detail', compact("book"));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $highval = Book::max('views');
        $id = Book::where('views', $highval)->take(1)->pluck('id');
        $highest = Book::find($id);

        $lastbookreview = Book::orderBy('created', 'desc')->take(5)->get();

        $allbook = Book::all();

        return view('home', compact('highest', 'lastbookreview', 'allbook'));
    }
}

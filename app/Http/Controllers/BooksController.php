<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request){
        $books = [
            'Livro 1',
            'Livro 2',
            'Livro 3',
            'Livro 4'
        ];

        $name = 'Érick';

        return view('books.index')
            ->with('name', $name)
            ->with('books', $books);
    }

    public function create(Request $request){
        return view('books.create');
    }
}

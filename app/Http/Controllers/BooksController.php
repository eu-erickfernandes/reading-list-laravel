<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request){
        $name = 'Érick';
        
        $books = Book::all();


        return view('books.index')
            ->with('name', $name)
            ->with('books', $books);
    }

    public function create(Request $request){
        return view('books.create');
    }

    public function store(Request $request){

        Book::create($request->all());

        return to_route('books.index');
    }

    public function destroy(Request $request){
        Book::destroy($request->book);

        return to_route('books.index');
    }
}

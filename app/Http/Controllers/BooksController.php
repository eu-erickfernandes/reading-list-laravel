<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request){
        $name = 'Érick';
        
        $books = Book::all();

        $successMessage = session('message.success');
        // $request->session()->forget('message.success');


        return view('books.index')
            ->with('name', $name)
            ->with('books', $books)
            ->with('successMessage', $successMessage);
    }

    public function create(Request $request){
        return view('books.create');
    }

    public function store(Request $request){

        $book = Book::create($request->all());

        // $request->session()->flash('message.success', "Book '{$book->name}' created");

        return to_route('books.index')
            ->with('message.success', "Book '{$book->name}' created");
    }

    public function edit(Book $book){
        return view("books.edit")
            ->with('book', $book);
    }

    public function update(Book $book, Request $request){
        $book->update($request->all());

        return to_route('books.index')
            ->with('message.success', "Book '{$book->name}' updated");
    }

    public function destroy(Book $book){
       
        $book->delete();

        return to_route('books.index')
            ->with('message.success', "Book '{$book->name}' deleted");
    }
}

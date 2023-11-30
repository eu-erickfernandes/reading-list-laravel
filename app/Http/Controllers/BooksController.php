<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookFormRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Book::all();

        $successMessage = session('message.success');

        return view('books.index')
            ->with('books', $books)
            ->with('successMessage', $successMessage);
    }

    public function create(Request $request){
        $categories = Category::all();

        return view('books.create')
            ->with('categories', $categories);
    }

    public function store(BookFormRequest $request){
        // dd($request);

        $book = Book::create($request->all());

        return to_route('books.index')
            ->with('message.success', "Book '{$book->name}' created");
    }

    public function edit(Book $book){
        $categories = Category::all();
        
        return view("books.edit")
            ->with('book', $book)
            ->with('categories', $categories);
    }

    public function update(Book $book, BookFormRequest $request){
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

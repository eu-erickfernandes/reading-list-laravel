<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/books');
});

// Route::controller(BooksController::class)->group(function () {
//     Route::get('/books', 'index')->name('books.index');
//     Route::get('/books/create', 'create')->name('books.create');
//     Route::post('/books/store', 'store')->name('books.store');
// });

Route::resource('/books', BooksController::class);
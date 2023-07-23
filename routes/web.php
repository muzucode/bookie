<?php

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

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
    return view('home', [
        'heading' => 'Homepage',
        'books' => Book::all(),
        ],
    );
});
Route::get('/books/{bookId}', function(Request $request) {
        return view('book', [
        'book' => Book::find($request->bookId)
    ]);
});
Route::get('/authors/{authorId}', function(Request $request) {
    return view('author', [
        'author' => Author::find($request->authorId),
        'books' => Book::where('author_id', $request->authorId)->get(),
    ]);
});


Route::get('/search', function(Request $request) {
    dd($request->first . $request->last);
});
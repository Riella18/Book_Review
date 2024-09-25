<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;


Route::resource('books.reviews', ReviewController::class)->only(['create', 'store']);

Route::get('/', function () {
    return redirect()->route('books.index');
});


Route::resource('books', BookController::class);

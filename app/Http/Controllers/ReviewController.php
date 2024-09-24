<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
      /**
     * Show the form for creating a new review.
     */
    public function create(Book $book)
    {
        return view('reviews.create', ['book' => $book]);
    }

    // Add other necessary methods like store, edit, etc.
}

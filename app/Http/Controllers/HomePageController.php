<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomePageController extends Controller
{
    public function showCollection()
    {
        $crime_books = Book::where('category_2_id', 12)
            ->with('authors')
            ->orderBy('publication_date', 'desc')
            ->limit(10)
            ->get();
        // $crime_books->load([
        //     'authors',
        //     'publishers'
        // ]);
        return view('index.index', compact('crime_books'));
    }
}

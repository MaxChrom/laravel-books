<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    public function show($book_id)
    {
        $book = Book::findOrFail($book_id);
        return view('book.show', compact('book'));
    }
    public function saveReview(Request $request, $book_id)
    {
        $this->validate($request, [
            'text' => 'required',
            'max:255',
            function($attribute, $value, $fail) use ($book_id){
                $existing_review = Review::where('book_id', $book_id)->where('user_id', Auth::id())->first();
                if ($existing_review){
                    $fail('Reviewed this book already');
                }
            }
        ], [
            'text.max' => 'Noooo! This is too long!'
        ]);

        $review = new Review;
        $review->book_id = $book_id;
        $review->user_id = Auth::id();
        $review->text = $request->post('text');
        $review->save();
        session()->flash('success_message', 'Review saved. Thank you.');
        return redirect()->route('book.show', $book_id);
    }
}

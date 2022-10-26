<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::get();
        // dd($authors);

        return view('index.authors', compact('authors'));
    }

    public function create()
    {
        return view('index.create');
    }


    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'name' => 'required|min:3'
            ]
        );
        $author = new Author;
        $author->name = $request->input('name');
        $author->slug = $request->input('slug');
        $author->save();

        session()->flash('success_message', 'The movie was successfully saved.');


        return redirect()->route('homepage');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function booklist(Request $request)
    {
        $categories = Category::all();
        if ($request->category || $request->title) {
            
            $books = Book::whereHas('categories', function($q) use($request){
                            $q->where('categories.id', $request->category);
                        })->get();
            if($request->title !=""){
                Book::where('title', 'like', '%'.$request->title.'%');
            }
        }
        else {
            $books = Book::all();
        }
        return view('book-list', ['books' => $books, 'categories' => $categories]);
    }
}

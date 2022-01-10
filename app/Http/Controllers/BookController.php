<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('insert');
    }

    public function insert(Request $request)
    {
        $book= new Book();
        $book->bookname=$request->input('bookname');
        $book->author=$request->input('author');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getclientoriginalExtension(); // getting image ext
            $filename = time().'.'. $extension;
            $file->move('uploads/book/', $filename);
            $book->image = $filename;
         } else {
            return $request;
            $book->image = '';
       }
       $book->save();
       return view('insert')->with('insert',$book);

    }

    public function display()
    {
        $books=new Book;
        $book=$books::paginate(1);
        return view('view')->with('book',$book);
    }
}

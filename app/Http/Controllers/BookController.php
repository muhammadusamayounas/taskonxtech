<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\File;

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
    public function updatedisplay()
    {
        $books=new Book;
        $book=$books::paginate(1);
        return view('update')->with('book',$book);
    }

    public function update($id)
    {
        $books=new Book;
        $book=$books::find($id);
        return view('updatepage')->with('book',$book);
    }
    public function updatebook(Request $request,$id)
    {
        $books=new Book;
        $book=$books::find($id);
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
       return redirect('/updateBook')->with('book',$book);

    }
    public function deletebook($id)
    {
        $books=new Book;
        $book=$books::find($id);
        $imagelocation='uploads/book/'.$book->image;
        if(File::exists($imagelocation))
        {
             File::delete($imagelocation);
        }
        $book->delete();
       return redirect('/home')->with('book',$book);
    }
}

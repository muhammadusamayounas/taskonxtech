@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <label>Update Book</label>
            <div class="jumbotron">
            <form action="/bookupdate/{{$book->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{method_field('PUT')}}
               <div class="form-group"> 
                   <label>Book Name</label>
                   <input type="text" name="bookname" class="form-control" value="{{$book->bookname}}" placeholder="Book Name">
                </div>
               <div class="form-group">
                 <label>Author Name</label>
                 <input type="text" name="author" class="form-control" value="{{$book->author}}" placeholder="Author Name">
               </div>
                <div class="input-group">
                   <div class="custom-file">
                       <input type="file" name="image" class="custom-file-input" value="{{$book->image}}" >
                       <label class="custom-file-label">Choose file</label>
                   </div>
                   <button type="submit" name="submit" class="btn btn-primary"> Update </button>

                </div>
            </form>

         </div>
        </div>
    </body>
    </html>

</main>
@endsection
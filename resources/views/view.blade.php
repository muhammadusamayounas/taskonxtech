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
       <style>
        .row{
            justify-content: center;
            align-items: center;
          }
          </style>
    
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <div class="table table-strippied table-bordered">
                    <table class="table">
                       <thead class="thead-dark">
                           <tr>
                              <th scope="col"> Name </th>
                              <th scope="col"> Author Name </th>
                              <th scope="col"> Image </th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($book as $books)
                           <tr>
                              <td>{{$books->bookname}}</td>
                              <td>{{$books->author}}</td>
                              <td><img src="{{asset('uploads/book/'.$books->image)}}"width="200px;"height="200px;"alt="image"></td>
                           </tr>
                           @endforeach
                       </tbody>
                    </table>
                    <div class="row">
                    {{$book->links()}}
                </div>
                </div>
        </div>
    </div>
    </body>
    </html>

</main>
@endsection
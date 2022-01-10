@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
<html>
    <head>
        <style>
        .form-control-lg{
            justify-content: center;
            align-items: center;
          }
         </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
    </head>
    <body>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">Enter The Book Name</h1>
            <br />
            <input  name="book" id="book" class="form-control-lg" placeholder="Enter Book Name..." />
                <a href="/showbook">
                <button type="submit"
                class="w-full select-none font-bold whitespace-no-wrap p-10 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-2">
                    {{ __('Search Book') }}
                </button>
        </div>
        <br>
    </body>
</html>

<script>

var path = "{{ url('typeahead_autocomplete/action') }}";

$('#book').typeahead({

    source: function(query, process){

        return $.get(path, {query:query}, function(data){

            return process(data);

        });

    }

});

</script>

</main>
@endsection
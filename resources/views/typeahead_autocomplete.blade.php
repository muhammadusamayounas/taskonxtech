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
        </div>
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
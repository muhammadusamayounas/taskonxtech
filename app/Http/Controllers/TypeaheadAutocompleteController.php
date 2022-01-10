<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Book;

class TypeaheadAutocompleteController extends Controller
{
    function index()
    {
        return view('typeahead_autocomplete');
    }
    function action(Request $request)
    {
      //  $data = $request->all();

        $query = $request->get('query');

        $filter_data = User::select('email')
                        ->where('email','LIKE', '%'.$query.'%')
                        ->get();

        return response()->json($filter_data);
    }
}
?>
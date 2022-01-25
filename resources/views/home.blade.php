@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <style>
        .flex-wrap{
            justify-content: center;
            align-items: center;
          }
          </style>

<div class="flex flex-wrap">
    <a href="/typeahead_autocomplete">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('Search Book from Library') }}
    </button>
</div>
<br>
@can('admin')
    
<div class="flex flex-wrap">
    <a href="/view">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('List All Books') }}
    </button>
</div>
<br>
<div class="flex flex-wrap">
    <a href="/insertbook">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('Insert Book') }}
    </button>
</div>
    <br>
<div class="flex flex-wrap">
    <a href="/updateBook">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('Update Book') }}
    </button>
</div> 
    <br>
    <div class="flex flex-wrap">
        <a href="/updateBook">
        <button type="submit"
        class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
            {{ __('Delete Book') }}
        </button>
</div>
@endcan

</main>
@endsection


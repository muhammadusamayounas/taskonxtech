<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeaheadAutocompleteController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


//use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email/verify', function () {return view('auth.verify-email');})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {$request->fulfill();return redirect('/home');})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {$request->user()->sendEmailVerificationNotification();return back()->with('message', 'Verification link sent!');})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/typeahead_autocomplete', [TypeaheadAutocompleteController::class, 'index']);
Route::get('/typeahead_autocomplete/action', [TypeaheadAutocompleteController::class, 'action'])->name('typeahead_autocomplete.action');
Route::get('/insertbook', [BookController::class,'index']);
Route::post('/addbook', [BookController::class,'insert'])->name('addbook');
Route::get('/view', [BookController::class,'display']);
Route::get('/updateBook', [BookController::class,'updatedisplay']);
Route::get('/editbook/{id}', [BookController::class,'update']);
Route::put('/bookupdate/{id}', [BookController::class,'updatebook']);
Route::get('/deletebook/{id}', [BookController::class,'deletebook']);

?>



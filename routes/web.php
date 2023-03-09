<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/people', 'App\Http\Controllers\MainController@index');

Route::get('/about', function() {
    return view('about');
});

Route::get('/{vue_capture?}', function() {
    return view('home');
})->where('vue_capture', '[\/\w\.-]*');

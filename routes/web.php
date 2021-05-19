<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/categories', 'App\Http\Controllers\MainController@categories');
Route::get('/categories/{category}', 'App\Http\Controllers\MainController@category');


//Route::get('/catalog/{item}', function ($item) {
//    return view('item');
//});



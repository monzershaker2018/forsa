<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');






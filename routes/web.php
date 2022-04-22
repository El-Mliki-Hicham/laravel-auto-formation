<?php

use Illuminate\Support\Facades\Route;

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




//hello world
Route::get('/Hello', function () {
    return 'hellow World';
});
//hello world
Route::get('/Bonjour', function () {
    return view('welcome');
});


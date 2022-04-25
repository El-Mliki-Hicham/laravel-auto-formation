<?php


use Illuminate\Support\Facades\Route;



use App\Http\Controllers\testContoller;


//test controller
route::get("/testController" ,[testContoller::class,'test'] );



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




// hello world
Route::get('/', function () {
    return 'hellow World';
});


// test viewer
Route::get('/testView', function () {
    $text = 'test views';
    return view("pages/testView",compact('text'));
});




//test controller
// route::get("/testControlle" ,[testContoller::class,'test'] );
route::get('/test/{id}' ,[testContoller::class,'view'] );



//View avec id


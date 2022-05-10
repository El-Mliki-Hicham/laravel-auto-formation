<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\testContoller;
use App\Http\Controllers\controllerId;
use App\Http\Controllers\LaravelTestController;
use App\Models\laravelTest;

/*
|--------------------------------------------------------------------------
|Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//test controller
route::get("/testController" ,[testContoller::class,'test'] );




// hello world
Route::get('/', function () {
    return 'hellow World';
});


// test viewer
Route::get('/testView', function () {
    $text = 'test views';
    return view("test/testView",compact('text'));
});



//test controller
route::get('/testControlle' ,[testContoller::class,'test']);


//View avec id
route::get('/person/{id}' ,[controllerId::class,'view'] );



// route::get('/person', [controllerId::class,'insert']);
route::get('/person', [controllerId::class,'show']);
route::post('/crud', [controllerId::class,'add']);
route::get('/delete/{id}', [controllerId::class,'supprime']);
route::get('/edit/{id}', [controllerId::class,'afficher_modif']);
route::get('/editv/{id}', [controllerId::class,'modifierr']);
// route::get('/person', [controllerId::class,'modifier']);




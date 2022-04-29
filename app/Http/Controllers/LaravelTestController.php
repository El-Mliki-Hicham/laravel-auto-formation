<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\laravelTest;



class LaravelTestController extends Controller
{
    public function index(){

$person = laravelTest::all();

return  view('pages.person',compact("person"));
    }
}

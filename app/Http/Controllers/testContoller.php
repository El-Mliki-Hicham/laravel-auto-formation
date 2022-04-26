<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class testContoller extends Controller
{
    public function test(){
    $title = "Test Controller";
    $text= " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga dolorem fugit numquam assumenda! Delectus corporis eos quo optio.";
    return view("pages/testController", compact("text","title"));
}


}
?>


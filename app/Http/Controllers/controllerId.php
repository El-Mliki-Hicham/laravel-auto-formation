<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerId extends Controller
{
    public function view($id){

        $person = [
            1 => 'hicham ',
            2 => "amine ",
        ];
    $personId = $person[$id];
    return view('pages/controllerId',compact("personId"));
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerId extends Controller
{
    public function view($id){

        $person = [
            1 => 'hicham ',
            2 => "yousra ",
            3=> "chaimae",
            "nada"=>"20 ans",
        ];
    $personId = $person[$id];
    return view('test/controllerId',compact("personId"));
    }
    
}

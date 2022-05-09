<?php

namespace App\Http\Controllers;

use App\Models\laravelTest;
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


    public function insert(){
    $person = new laravelTest();
    $person->namee= "hicham";
      $insert =  $person->save();

      return view("test/crud",compact("insert"));
    }

public function show(){

//     //prendre 2 ligne
    // $person = laravelTest::all()->take(2);  

// //prendre passe 1  ligne    
    // $person = laravelTest::all()->skip(7)->take(2);  

//prendre  les dernier ligne    
    $person = laravelTest::latest()->take(4)->skip(1)->get();  

return view("pages/crud",compact("person"));
}
}

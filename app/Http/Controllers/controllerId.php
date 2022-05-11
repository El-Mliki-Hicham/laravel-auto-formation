<?php

namespace App\Http\Controllers;

use App\Models\laravelTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    //compteur
    // $person = laravelTest::count();  

    //prendre 2 ligne
    $person = laravelTest::all();  

// //prendre passe 1  ligne    
    // $person = laravelTest::all()->skip(7)->take(2);  

//prendre  les dernier ligne    
    // $person = laravelTest::latest()->take(4)->skip(1)->get();  

// // par id 
//     $person = laravelTest::where('id',"7")->get();

    // par id 
    // $person = laravelTest::find(2);

// return $person;
return view("pages/crud",compact("person"));
}



public function modifier(){

$person = laravelTest::find(7);

$person->namee='nada stitou';
$person->save();
}


public function delete(){
$person = laravelTest::find(1)->delete();
    
    }


public function add(Request $request){

   

    
        $person = new laravelTest();
        $person->namee=$request->input("namee");
          $insert =$person->save();
    
          
          if($insert){
              return back();
          }
        

}

public function supprime($id){

    laravelTest::find($id)->delete();
    return redirect('person');

   

}
public function afficher_modif($id){
    
    $person = laravelTest::all()->where("id",$id);

   return view("pages/edit",compact("person"));

}




    public function modifierrr(Request $request){

   
        $id=$request->input("id");
    
        $person =laravelTest::all()->where("id",$id);
        $person->namee=$request->input("name");
        $insert =$person->save();
    
          
        if($insert){
            return back();
        }
      
        
}
    public function addd(Request $request){

   
        $id=$request->input("id");
    DB::table('laravel_tests')

    ->where('id',$id)
    ->update(['namee'=>$request->input("name")]);

    return redirect('person');

      
        
}


}
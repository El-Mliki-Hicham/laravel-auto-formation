


@forelse ($person as $value){

  <div>
     <a href="delete/{{$value->id}}"><button>delet
     </button></a>
     <a href="edit/{{$value->id}}"> <button >edit</button> </a>
  
     <h1>{{$value->namee}}</h1></div> 

   }
    
@empty
    
@endforelse
<h1>laravel</h1>
<form action="crud" method="post">
   @csrf
 
<input name="namee" type="text">

<button name="btn">hello</button>

</form>
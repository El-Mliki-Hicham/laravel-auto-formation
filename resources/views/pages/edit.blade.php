

 
  
  <form action="editv">
    @forelse ($person as $value){
  <input type="" name="namee" value="{{$value->namee}}">
  <button>cl</button>
}


@empty

@endforelse

</form>

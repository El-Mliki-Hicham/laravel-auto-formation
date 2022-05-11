

 
    
  <form action="{{route('mod')}}" method="post">
    @csrf
    @forelse ($person as $value){

  <input type="hidden" name="id" value="{{$value->id}}">
  <input type="" name="name" value="{{$value->namee}}">
  <button>cl</button>
}


@empty

@endforelse

</form>

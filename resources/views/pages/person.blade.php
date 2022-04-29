@forelse ($person as $value)
    <li>{{$value->namee}}</li>
@   empty
    
@endforelse
<ul>
    @foreach ($trains as $train)
        <li>{{$train->codice->treno}} </li>
    @endforeach
</ul>

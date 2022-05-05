
INSERT INTO 'train' ('id','created_at','updated_at','azienda''stazione_di_partenza','stazione_di_arrivo','orario_di_partenza','codice_treno','numero_carozze','in_orario','cancellato','scopo')
@for ($i = 1; $i < 100; $i++)
    @php
        $timer = collect([1,2,3,4,5,6]);
        $number = collect([1,2,3,4,5,6,7,8,9]);
        $random = $number->random();
        $tim = $timer->random();
        $zona = collect(['roma','parma','milano','napoli']);
    @endphp
    ( {{$i}},'null','null','trenitalia',{{$zona->random()}},{{$zona->random()}},{{1 . $tim . ':' . $tim . $tim}},{{$random . $random . $random . $random}},{{1 . $random}},1,0,'passegeri')
@endfor

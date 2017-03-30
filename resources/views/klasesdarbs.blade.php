<h1> Randomā izvada saraksta skaitļus </h1>

@foreach ($randlist as $one)
    <ul>
        <li>{{$one}}</li>
    </ul>
@endforeach

<h1> Izvada tikai tos kuri ir patiesi vai lielāki </h1>

@foreach ($equivalent as $one1)
    <ul>
        <li>{{$one1}}</li>
    </ul>
@endforeach

{{$allnumberinlist}}




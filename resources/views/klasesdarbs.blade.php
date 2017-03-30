<h1> Randomā izvada saraksta skaitļus. </h1>

@foreach ($randlist as $one)
    <ul>
        <li>{{$one}}</li>
    </ul>
@endforeach

<h1> Izvada tikai tos kuri ir vienādi vai mazāki par {{$x}}. </h1>

@foreach ($equivalent as $one1)
    <ul>
        <li>{{$one1}}</li>
    </ul>
@endforeach

<h1> Izvada cik skaitļi ir pēdējā sarakstā. </h1>

{{$allnumberinlist}}




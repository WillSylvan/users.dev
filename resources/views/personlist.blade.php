<!DOCTYPE html>
<html>
    <head>  
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <!--AIZIET BODIJS-->

    <body>

            <ul>
                @foreach ($allpersons as $one)
                <li>
                    <div class="containerforpage">

                        <div class="bilance {{ $one['bilance'] > 0 ? "positive" : "negative" }}"> {{ $one['bilance'] }}</div>

                        <div class="twoInOne">
                            <div class="name"><b>{{$one["name"]}}</b></div>
                            
                            <div class="age">{{$one["age"]}}  

                                    @if($one["age"] < 18)
                                        <div class="kid">
                                            (Nepilngadīgs)
                                        </div>
                                    @endif

                            </div>

                        </div>

                    </div>
                </li>
                @endforeach
            </ul>

    </body>

</html>


<!DOCTYPE html>
<html>
    <head>  
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <!--AIZIET BODIJS-->

    <body>

        
            <ul>
                @foreach ($allpersons as $one)
                <div class="containerforpage">

                    <!--<div class="bilance"><li>{{$one["bilance"]}}</li></div>-->
                        <div class="bilance {{ $one['bilance'] > 0 ? "positive" : "negative" }}"> {{ $one['bilance'] }}</div>

                    <div class="twoInOne">
                        <div class="name"><b><li>{{$one["name"]}}</li></b></div>
                        
                        <div class="age"><li>{{$one["age"]}}  
                            <div class="kid">
                                @if($one["age"] < 18)
                                    Nav Pilngadīgs
                                @endif
                            </div>
                        </li></div>

                    </div>

                    
                </div>
                @endforeach
            </ul>
        

    </body>

</html>


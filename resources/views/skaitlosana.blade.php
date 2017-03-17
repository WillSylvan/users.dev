<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
</head>

<body>

    <div class= "allnumberstuff"> 
        <div class="margin-left">
            <h1> Nesakārtots saraksts </h1>
                {{json_encode($list)}}

            <h1> Sakārtots saraksts </h1>
                {{json_encode($sortedlist)}}

            <h1> Apgriestā veidā </h1>
                {{json_encode($reversenumb)}}

            <h1> Lielākais Skaitlis </h1>
                {{json_encode($maxnumb)}}

            <h1> Mazākais Skaitlis </h1>
                {{json_encode($minnumb)}}
        
            <h1> Cik Skatļi </h1>
                {{json_encode($hownumbers)}}
        </div>
    </div>

<div class= "allnamestuff"> 
    <div class="margin-left">
        <h1> Vārds Uzvārds </h1>
            {{$name}}

        <h1> Vārda Garums </h1>
            {{$namecount}}

        <h1> Visus Lielos Burtus Pārtaisa Par Maziem </h1>
            {{$namestrtolower}}

        <h1> Visus Burtus Pārtaisa Par Lielajiem </h1>
            {{$namesstrtoupper}}
    </div>
</div>


<div class= "alllettersstuff"> 
    <div class="margin-left">
        <h1> Burti Sajauktā secībā </h1>
        {{json_encode($letters)}}

        <h1> Burti Sakārtotā secībā </h1>
        {{json_encode($asortletters)}}

    </div>
</div>



</body>
</html>
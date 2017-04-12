<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="/css/app.css">
  <style>
    li {
        margin-bottom: 20px;


    }
  </style>
</head>

<body>

    <form action="/demo">
        <select name="email">
            @foreach ($allemails as $secondone)
                <option value="{{ $secondone->email }}" @if ( $secondone->email === $email) selected @endif >{{ $secondone->email }}</option>
            @endforeach
        </select>

        <input type="text" name="name" value="name">
        <input type="submit" value="Submit">
    </form> 

    <ul>
        @foreach ($users as $thatone)
            <li>
                <dt> ID: </dt>
                <dd> {{ $thatone->id }} </dd>

                <dt> NAME: </dt>
                <dd> {{ $thatone->name }} </dd>

                <dt> EMAIL: </dt>
                <dd> {{ $thatone->email }} </dd>

                <dt> PASSWORD: </dt>
                <dd> {{ $thatone->password }} </dd>
            </li>
        @endforeach
    </ul>


</body>
</html>
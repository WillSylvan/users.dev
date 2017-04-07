
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
    
    
    
    <form action="/userlist">
        <input type="text" name="email" value="email">
        <input type="text" name="name" value="name">
        <input type="submit" value="Submit">
    </form> 


    <ul>
        @foreach ($allUserOfDBlist as $one)
            <li>
                <dt> ID - </dt> 
                    <dd> {{ $one -> id }} </dd>
                    
                <dt> Name - </dt>
                    <dd> {{ $one -> name }} </dd>
                    
                <dt> Email - </dt> 
                    <dd> {{ $one -> email }} </dd> 
                    
                <dt> Pass - </dt> 
                    <dd> {{ $one -> password }} </dd>
                    
            </li>
        @endforeach
    </ul>

    <form action="/userlist">
        <select name="email_list">
            @foreach ($emaillist as $two)
                <option value=>{{ $two -> email }}</option>
            @endforeach
        </select>

        <br><br>

        <input type="submit">
    </form>






</body>
</html>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="/css/app.css">
</head>

<body>

  <div class="namestyle">{{ $user->name }}</div> - [ {{ $user->email }} ]

  <div class="botton">

   <a href="{{ url("/users") }}" ><p>Back</p></a>

  </div> 

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <a href="{{route('movies.index')}}">Torna alla lista film</a>
    <p>{{$movie->descrizione}}</p>
</body>
</html>
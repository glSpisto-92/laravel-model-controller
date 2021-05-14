<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
    <title>Movie description</title>
</head>
<body>
    <a href="{{route('movies.index')}}">Torna alla lista film</a>
    <p>{{$movie->descrizione}}</p>
</body>
</html>

<style>
    body{
        font-family: 'Goblin One', cursive;
    }
    p{
       max-width: 600px;
       display: flex;
       margin: 0 auto;
       line-height: 2;
       color: grey;
    }
    a{
        text-decoration: none;
        background-color: coral;
            border-radius: 10px;
            padding: 10px;
            color: #fff;
            margin-top: 10px;
            display: inline-block;
        }
        a:hover{
            color: #000;
            background-color: grey;
        }
    }
</style>
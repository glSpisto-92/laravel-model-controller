<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
    <title>Movies</title>
</head>
<body>
   <div class="container"> 
        <div class="wrapper">
            <h1>Movies List!</h1>
    @foreach ($movies as $movie)
            <ul>
                <li><h2>{{$movie->titolo}}</h2></li>
                <li><h3>{{$movie->autore}}</h3></li>
                <li><span>{{$movie->genere}}</span></li>
                <a href="{{route('movies.show', ['movie' => $movie->id] )}}">Leggi la descrizione!</a>
            </ul>
    @endforeach
        </div>
    </div>
    
    {{-- css al volo --}}
    <style>
        body{
            font-family: 'Goblin One', cursive;
        }
        .container{
            /* display:flex; */
        }
        .wrapper{
            padding: 10px;
        }
        h1{
            margin-bottom: 30px;
        }
        ul{
            list-style: none;
            text-align: center;
            margin-bottom: 50px;
            background-color: lightgrey;
            border-radius: 10px;
            padding: 15px;
        }
         a{
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            background-color: coral;
            border-radius: 10px;
            padding: 10px;
            color: #fff;
        }
        a:hover{
            color: #000;
            background-color: grey;
        }
    </style>
</body>
</html>


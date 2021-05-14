<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Db stamp</title>
</head>
<body>
    
   <div class="container"> 
        <div class="wrapper">
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
        .container{
            /* display:flex; */
        }
        .wrapper{
            width:calc(100% / 3);
            padding: 10px;
        }
        ul{
            list-style: none;
        }
         a{
            text-decoration: none;
            display: block;
            margin-top: 20px;
        }
    </style>
</body>
</html>


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
    @foreach ($movies as $movie)
    <div class="wrapper">
        <ul>
            <li>{{$movie->titolo}}</li>
            <li>{{$movie->autore}}</li>
            <li>{{$movie->genere}}</li>
            <li>{{$movie->descrizione}}</li>
        </ul>
    </div>
    @endforeach
    </div>
    
    {{-- css al volo --}}
    <style>
        .container{
            display:flex;
        }
        .wrapper{
            width:calc(100% / 3);
            padding: 20px;
            border: 1px solid coral;
        }
    </style>
</body>
</html>
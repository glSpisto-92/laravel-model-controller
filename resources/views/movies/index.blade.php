@extends('layouts.main')

@section('PageTitle')
    Lista film | info
@endsection

@section('content')
    @foreach ($movies as $movie)
    <ul>
        <li><h2>{{$movie->titolo}}</h2></li>
        <li><h3>{{$movie->autore}}</h3></li>
        <li><span>{{$movie->genere}}</span></li>
        <a href="{{route('movies.show', ['movie' => $movie->id] )}}">Leggi la descrizione!</a>
    </ul>
    @endforeach
@endsection



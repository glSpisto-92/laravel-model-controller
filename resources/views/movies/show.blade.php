@extends('layouts.main')

@section('content')
    <a href="{{route('movies.index')}}">Torna alla lista film</a>
    <p>{{$movie->descrizione}}</p>
@endsection
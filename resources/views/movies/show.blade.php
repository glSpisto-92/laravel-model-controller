@extends('layouts.main')

@section('PageTitle')
    Trama film | {{$movie->titolo}}
@endsection

@section('content')
    <a href="{{route('movies.index')}}"><button type="button" class="btn btn-info">Torna alla lista</button></a>
    <p>{{$movie->descrizione}}</p>
@endsection
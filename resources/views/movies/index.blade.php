@extends('layouts.main')

@section('PageTitle')
    Lista film | info
@endsection

@section('content')
    <h1>Movies list</h1>
    <div class="btn_add text-right">
        <a href="{{route('movies.create')}}"<button type="button" class="btn btn-primary">Aggiungi film</button></a>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Genere</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Elimina film</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($movies as $movie)
          <tr>
            <td>{{$movie->titolo}}</td>
            <td>{{$movie->autore}}</td>
            <td>{{$movie->genere}}</td>
            <td><a href="{{route('movies.show', ['movie' => $movie->id] )}}"><button type="button" class="btn btn-secondary">Descrizione</button></a></td>
            <td><a href="{{route('movies.show', ['movie' => $movie->id] )}}"><button type="button" class="btn btn-danger">Elimina</button></a></td>
          </tr>
    @endforeach
        </tbody>
      </table>
@endsection



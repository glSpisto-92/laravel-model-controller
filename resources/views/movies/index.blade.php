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
            <th scope="col">Anno</th>
            <th class="text-center" scope="col">Altro</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($movies as $movie)
          <tr>
            <td>{{$movie->titolo}}</td>
            <td>{{$movie->autore}}</td>
            <td>{{$movie->genere}}</td>
            <td>{{$movie->anno}}</td>
            <td><a href="{{route('movies.show', ['movie' => $movie->id] )}}"><button type="button" class="btn btn-secondary">Descrizione</button></a>
                <a href="{{route('movies.edit', ['movie' => $movie->id] )}}"><button type="button" class="btn btn-primary ml-4">Modifica</button></a>
                <form class="d-inline-block" action="{{route('movies.destroy', ['movie' => $movie->id] )}}" method="POST"> 
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger ml-4">Elimina</button>
                </form>   
            </td>
          </tr>
    @endforeach
        </tbody>
      </table>
  {{-- toast success --}}
      @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
    @endif
    @if (session('notice'))
      <div class="alert alert-success">
          {{ session('notice') }}
      </div>
    @endif
@endsection



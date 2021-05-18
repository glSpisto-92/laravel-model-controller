@extends('layouts.main')

@section('PageTitle')
    Aggiungi un nuovo film!   
@endsection

@section('content')
    <h1>Aggiungi un film!</h1>
    <form action="{{route('movies.store')}}" method="POST">
        @method('POST')
        @csrf

        <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" class="form-control" name="titolo" id="titolo" placeholder="Inserisci un titolo">
        </div>
        <div class="form-group">
            <label for="autore">Autore</label>
            <input type="text" class="form-control" name="autore" id="autore" placeholder="Inserisci un autore">
        </div>
        <div class="form-group">
            <label for="genere">Genere</label>
            <input type="text" class="form-control" name="genere" id="genere" placeholder="Inserisci il genere">
        </div>
        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <textarea type="text" class="form-control" name="descrizione" id="descrizione" placeholder="Inserisci una descrizione" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salva</button>
    </form>
@endsection
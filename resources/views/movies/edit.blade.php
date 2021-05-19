@extends('layouts.main')

@section('PageTitle')
    Modifica | Aggiorna film!   
@endsection

@section('content')
    <h1>Modifica un film!</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
        @method('PUT')
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
            <label for="genere">Anno</label>
            <input type="text" class="form-control" name="anno" id="anno" placeholder="Inserisci l'anno">
        </div>
        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <textarea type="text" class="form-control" name="descrizione" id="descrizione" placeholder="Inserisci una descrizione" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salva</button>
    </form>
    
@endsection
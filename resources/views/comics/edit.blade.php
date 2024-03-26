@extends('layouts.app')

@section('title', "Modifica Comic" . $comic->series)
    

@section('main-content') 
    <div class="container py-4">

      {{-- pulsante torna alla lista --}}
      <a href="{{ route('comics.index')}}" class="btn btn-primary"> Torna alla lista </a>

      {{-- pulsante dettaglio fumetto --}}
      <a href="{{ route('comics.show', $comic)}}" class="btn btn-info"> Info </a>

      <h2 class="mt-3">Modifica ({{$comic->series}})</h2>

      {{-- form modifica fumetto --}}
      <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        {{-- aggiungo modificatore --}}
        @method("PATCH")
    
        <label for="title" class="form-label pt-3">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}"/>

        <label for="series" class="form-label pt-3">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}"/>

        <label for="thumb" class="form-label pt-3">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}"/>

        <label for="type" class="form-label pt-3">Genere</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}"/>

        <label for="sale_date" class="form-label pt-3">Data di uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"/>

        <label for="price" class="form-label pt-3">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}"/>
    
        <label for="description" class="form-label pt-3">Descrizione</label>
        <textarea
            class="form-control"
            id="description"
            name="description"
            rows="5"
        >{{$comic->description}}</textarea>
           
        <button type="submit" class="btn btn-warning mt-3">Modifica</button>
       </form>
    </div> 
@endsection

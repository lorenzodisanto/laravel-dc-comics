@extends('layouts.app')

@section('title', "Dettaglio Comics: $comic->series")
    

@section('main-content') 
    <div class="container py-4">
      {{-- pulsante ritorna alla lista fumetti --}}
      <a href="{{ route('comics.index')}}" class="btn btn-primary"> Torna alla lista </a>  
      
      {{-- pulsante modifica fumetto --}}
      <a href="{{ route('comics.edit', $comic)}}" class="btn btn-warning"> Modifica </a>     
      
      {{-- dettaglio fumetto --}}
      <div class="d-flex mt-4">
        <div>
          <img src="{{ $comic['thumb']}}" alt="">
        </div>
        <div>
          <h2 class="mx-4">{{ $comic->series }}</h2>
          <ul>
            <li><b>Nome: </b> {{ $comic->title }}</li>
            <li><b>Descrizione: </b> {{ $comic->description }}</li>
            <li><b>Prezzo: </b> {{ $comic->price }}</li>
            <li><b>Data di uscita: </b> {{ $comic->sale_date }}</li>
            <li><b>Genere: </b> {{ $comic->type }}</li>
          </ul>
        </div>
        
      </div>   
      
    </div> 
@endsection

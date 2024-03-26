@extends('layouts.app')

@section('title', "Dettaglio Comics: $comic->series")
    

@section('main-content') 
    <div class="container py-4">
      {{-- pulsante ritorna alla lista fumetti --}}
      <a href="{{ route('comics.index')}}" class="btn btn-primary"> Torna alla lista </a>  
      
      {{-- pulsante modifica fumetto --}}
      <a href="{{ route('comics.edit', $comic)}}" class="btn btn-warning"> Modifica </a>     
      
      {{-- dettaglio fumetto --}}
      <h2 class="my-3">{{ $comic->series }}</h2>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $comic['thumb']}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->title }}</h5>
              <p class="card-text">{{ $comic->description }}</p>
              <p class="card-text"><small class="text-body-secondary"><b>Prezzo: </b> {{ $comic->price }}</small></p>
              <p class="card-text"><small class="text-body-secondary"><b>Data di uscita: </b> {{ $comic->sale_date }}</small></p>
              <p class="card-text"><small class="text-body-secondary"><b>Genere: </b> {{ $comic->type }}</small></p>
            </div>
          </div>
        </div>
      </div> 
    </div> 
@endsection

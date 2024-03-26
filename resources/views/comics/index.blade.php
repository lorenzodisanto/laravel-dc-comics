@extends('layouts.app')

@section('title', 'Comics')
    

@section('main-content') 
    <div class="container py-4">
      {{-- pulsante inserisci fumetto --}}
      <a href="{{ route('comics.create') }}" role="button" class="btn btn-primary">Inserisci fumetto</a>

      {{-- lista comic --}}
      <div class="row g-4 mt-2">
        @foreach($comics as $comic)
        <div class="col-3">
           <div class="card h-100">
              <img src="{{ $comic['thumb']}}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $comic['series']}}</h5>

                {{-- pulsante dettaglio fumetto --}}
                <a href="{{ route('comics.show', $comic) }}" class="btn btn-info btn-sm">Info</a>

                {{-- pulsante modifica fumetto --}}
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning btn-sm">Modifica</a>
                
                {{-- form con pulsante elimina fumetto --}}
                <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline">
                  @csrf
                  {{-- metodo --}}
                  @method("DELETE")

                  <button class="btn btn-danger btn-sm">Elimina</button>
                </form>
              </div>
           </div>
         </div>
         @endforeach
        </div>
    </div> 
@endsection

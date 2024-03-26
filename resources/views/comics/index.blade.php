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
              <img src="{{ $comic['thumb']}}" class="card-img-top thumb-list" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $comic['series']}}</h5>

                {{-- pulsante dettaglio fumetto --}}
                <a href="{{ route('comics.show', $comic) }}" class="btn btn-info btn-sm">Info</a>

                {{-- pulsante modifica fumetto --}}
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning btn-sm">Modifica</a>
                
                {{-- pulsante per aprire modal eliminazione fumetto --}}
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}-modal">
                  Elimina
                </button>

                {{-- Modal eliminazione --}}
                <div class="modal fade" id="delete-comic-{{$comic->id}}-modal" tabindex="-1" aria-labelledby="delete-comic-{{$comic->id}}-modal" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$comic->series}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Vuoi eliminare il fumetto {{$comic->series}} ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                        
                        {{-- form con pulsante elimina fumetto --}}
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline">
                          @csrf
                          {{-- metodo --}}
                          @method("DELETE")
                          <button class="btn btn-danger">Elimina</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
           </div>
        </div>
        @endforeach
      </div>
    </div> 
@endsection

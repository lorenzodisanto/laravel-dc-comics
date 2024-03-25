@extends('layouts.app')

@section('title', "Aggiungi nuovo Comic")
    

@section('main-content') 
    <div class="container py-4">
      <form action="{{ route('comics.store') }}" method="POST">
        @csrf
    
        <label for="title" class="form-label pt-3">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" />

        <label for="series" class="form-label pt-3">Serie</label>
        <input type="text" class="form-control" id="series" name="series" />

        <label for="thumb" class="form-label pt-3">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" />

        <label for="type" class="form-label pt-3">Genere</label>
        <input type="text" class="form-control" id="type" name="type" />

        <label for="sale_date" class="form-label pt-3">Data di uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" />

        <label for="price" class="form-label pt-3">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" />
    
        <label for="description" class="form-label pt-3">Descrizione</label>
        <textarea
            class="form-control"
            id="description"
            name="description"
            rows="5"
        ></textarea>
           
        <button type="submit" class="btn btn-primary mt-3">Salva</button>
    </form>
    </div> 
@endsection

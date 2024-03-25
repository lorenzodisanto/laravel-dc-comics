@extends('layouts.app')

@section('title', 'Comics')
    

@section('main-content') 
    <div class="container py-4">
      <div class="row g-4">
        @foreach($comics as $comic)
        <div class="col-2">
           <div class="card h-100">
              <img src="{{ $comic['thumb']}}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $comic['series']}}</h5>
                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Info</a>
              </div>
           </div>
         </div>
         @endforeach
        </div>
    </div> 
@endsection

@extends('layouts.app')

@section('title', 'Comics')
    

@section('main-content') 
    <div class="container py-4">
      <div class="row g-4">
        @foreach($comics as $comic)
        <div class="col-2">
           <div class="box">
               <img src="{{ $comic['thumb']}}" alt="">
               <h6>{{ $comic['series']}}</h6>
           </div>
         </div>
         @endforeach
        </div>
    </div> 
@endsection

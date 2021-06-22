@extends('layouts.default')

@section('pageTitle','HOMEPAGE')

@section('content')

<main>
  {{--   @foreach($movies as $key => $movie)
        @dump($key , $movie)
    @endforeach --}}
    <div class="cardsBox">
        @foreach($movies as $movie)
        @php
            $date = date_create($movie->date);
            $formatDate = date_format($date, "M d Y");
        @endphp
        <div class="movieCard">
            <h4>Titolo: {{$movie->title}}</h4>
            <h4><small>Titolo originale: {{$movie->original_title}}</small></h4>
            <span>Nazionalita': {{$movie->nationality}}</span>
            <span>Uscita: {{ $formatDate }}</span>
            <span>Valutazione: {{$movie->vote}}</span> 
        </div>
        @endforeach
    </div>  
</main>
@endsection
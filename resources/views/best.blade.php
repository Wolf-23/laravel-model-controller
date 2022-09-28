@extends('layout.app')

@section('title-page', 'Best')
    
@section('main')
<h1 class="best">I nostri best Film:</h1>
<div class="container">
    @foreach ($bestMovie as $movie)
    <div class="card">
        <h3 class="title">Titolo: {{$movie->title}}</h3>
        <h4 class="original">Titolo Originale: {{$movie->original_title}}</h4>
        <h4 class="nation">Nazionalità: {{$movie->nationality}}</h4>
        <h4 class="date">Data: {{$movie->date}}</h4>
        <h3 class="vote">Voto: {{$movie->vote}}</h3>
    </div>
    @endforeach
</div>
@endsection
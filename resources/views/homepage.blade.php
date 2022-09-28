@extends('layout.app')

@section('title-page', 'HomePage')
    
@section('main')
<div class="container">
    @foreach ($movies as $movie)
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
@extends('layouts.master')

@section('content')
    
@foreach ($movies as $movie)

    <h1><a href= "{{ 'http://localhost/VIVIFY/napredni/Laravel/Predavanje_6/radOdKuce/movies/public/movies/' . $movie->id}}">{{ $movie->title }} </a></h1>
    <p>{{ $movie->storyline }}</p>
        
    @endforeach

@endsection



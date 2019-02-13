@extends('layouts.master')

@section('content')


<h1>{{ $movie->title }}</h1>
<br>
<h3>Genre: {{ $movie->genre }}</h3>
<h3>Director: {{ $movie->director }}</h3> 
<p>Year of production: {{ $movie->year }}</p>
<p>Storyline: {{ $movie->storyline }}</p>    
@endsection



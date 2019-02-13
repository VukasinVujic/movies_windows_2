<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($movies as $movie)

    <h1><a href="http://localhost/VIVIFY/napredni/Laravel/Predavanje_6/radOdKuce/movies/public/movies/ . $movie->id ">{{ $movie->title }} </a></h1>
    <p>{{ $movie->storyline }}</p>
        
    @endforeach

    
</body>
</html>
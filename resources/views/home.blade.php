<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1 class="text-uppercase">home page</h1>
        <h2>Ciao {{$nome}}</h2>
        <ul>
            @foreach($pagesLinks as $key => $link)
            <a class="home-links" href="{{ url('/'.$link) }}"> {{$key}} </a>
            @endforeach
        </ul>
    </body>
</html>

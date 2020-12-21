<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Name link</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1 class="text-uppercase">link con nome</h1>
        <a href="{{url('/')}}" class="back-home text-uppercase">Torna alla home</a>

        @foreach($name as $link)
            <p>Questo è un {{$link}}</p>
        @endforeach
    </body>
</html>

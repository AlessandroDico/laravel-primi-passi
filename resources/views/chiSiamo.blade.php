<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Chi siamo</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1 class="text-uppercase">chi siamo</h1>
        <a href="{{url('/')}}" class="back-home text-uppercase">Torna alla home</a>
        <h2>La nostra storia :</h2>
        @foreach($history as $story)
            <p>{{$story}}</p>
        @endforeach
    </body>
</html>

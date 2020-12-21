<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Contatti</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1 class="text-uppercase">contatti</h1>
        @foreach($contatti as $key => $contatto)
            <p>{{$key}} : {{$contatto}}</p>
        @endforeach
    </body>
</html>

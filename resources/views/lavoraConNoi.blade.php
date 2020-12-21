<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lavora con noi</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1 class="text-uppercase">Lavora con noi</h1>


        @forelse($posizioniAperte as $lavoro)
            <p>Candidati come : <a href="#">{{$lavoro}}</a> </p>
        @empty
            <p>Non ci sono posizioni aperte</p>
        @endforelse

    </body>
</html>

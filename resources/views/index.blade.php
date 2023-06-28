<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Treni</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Treni</h1>
   {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}} 
    <ul>
        @foreach($trains as $train)
        <li>
            {{ $train->azienda }},
            {{ $train->stazione_partenza }},
            {{ $train->stazione_arrivo }},
            {{ $train->orario_partenza }},
            {{ $train->orario_arrivo }},
            {{ $train->codice_treno }},
            {{ $train->numero_carrozze }},
            {{ $train->puntuale }},
            {{ $train->cancellato }}
        </li>
        @endforeach
    </ul>
</body>

</html>
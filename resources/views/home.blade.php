<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        @foreach ($trains as $train)
            <ul>            
                    <li>{{ $train['codice'] }}</li>           
                    <li>{{ $train['azienda'] }}</li>
                    <li>{{ $train['stazione_partenza'] }}</li>
                    <li>{{ $train['stazione_arrivo'] }}</li>
                    <li>{{ $train['orario_partenza'] }}</li>
                    <li>{{ $train['orario_arrivo'] }}</li>
                    <li>{{ $train['ritardo'] }}</li> 
                    <li>{{ $train['cancellato'] }}</li>                             
            </ul>
        @endforeach
    </body>
</html>

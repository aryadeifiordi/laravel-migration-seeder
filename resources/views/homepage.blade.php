<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body>
    <h1>Treni in partenza oggi</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <strong>Orario di partenza:</strong> {{ $train->stazione_partenza }}<br>
            </li>
        @endforeach
    </ul>

</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- -------- Start of Css -------- --}}
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        {{-- -------- End of Css -------- --}}

    </head>
    <body class="antialiased">

        <div id="app">
            <example-component></example-component>
        </div>

        {{-- -------- Start of Js -------- --}}
        <script src="{{ asset('/js/app.js') }}"></script>
        {{-- -------- End of Js -------- --}}
    </body>
</html>

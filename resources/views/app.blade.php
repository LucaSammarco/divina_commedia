<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Il token CSRF protegge l'applicazione contro attacchi Cross-Site Request Forgery -->

    <!-- Title -->
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @inertiaHead
</head>
<body>
    <div id="app" data-page="{{ json_encode($page) }}">
        <!-- Questo div è il punto di montaggio per l'app Vue e Inertia -->
        @inertia
    </div>

    <!-- Footer opzionale -->
</body>
</html>

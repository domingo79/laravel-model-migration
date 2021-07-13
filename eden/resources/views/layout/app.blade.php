<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Eden Viaggi')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header id="site_header">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('offerte') }}">Offerte</a>
        </nav>
    </header>

    <main id="site_main">
        @yield('content')
    </main>

    <footer id="site_footer"></footer>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>@yield('page-title','My Projects')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('aditionals-cdn','')
</head>

<body>
    <div id="app">
        <!-- Header Partials -->
        @include('partials.header')

        <!-- Main Section -->
        <main class="py-4">
            @yield('main-content')
        </main>
    </div>

    <!-- Footer Partials -->
    @include('partials.footer')

    <!-- Additionals Scrips -->
    @yield('aditionals-scripts','')
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @auth

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/backoffice/bootstrap-select.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/new_navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/new_content.css') }}">
        <script src="{{ asset('js/new_theme.js') }}"></script>
    @endauth
    @yield('link')
</head>

<body>

    @auth
        @include('parts.menu')
    @endauth

    @isset($type_login)
        @yield('content')
    @else
        <div id="app">
            <main class="">
                @yield('content')
            </main>
        </div>
    @endisset

    @yield('script')

    @auth
        <script src="{{ asset('js/all.min.js') }}"></script>
        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/backoffice/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('js/backoffice/dataTables.conditionalPaging.js') }}"></script>
        <script src="{{ asset('lang/bootstrap-select/' . App::getLocale() . '.js') }}"></script>

        <script src="{{ asset('js/new_app.js') }}"></script>
        <script src="{{ asset('js/new_dropdown_menu.js') }}"></script>
        <script src="{{ asset('js/new_datatable_search.js') }}"></script>
        <script src="{{ asset('js/new_switchalerthelper.js') }}"></script>
        <script src="{{ asset('js/new_toastr.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endauth

</body>

</html>

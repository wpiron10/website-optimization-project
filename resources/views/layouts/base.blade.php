<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Florian Reumont">

    <title>{{ config('app.name') }}</title>
    <meta name="description" content=""/>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    @yield('css')

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header></header>

    <main>
        @yield('content')
    </main>

    <footer></footer>

    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
    @yield('js')
</body>
</html>
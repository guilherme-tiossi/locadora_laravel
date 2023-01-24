<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{url('../css/style.css')}}">
        <script type="text/javascript" src="{{url('../js/script.js')}}"> </script>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script src="{{url('https://kit.fontawesome.com/051b5b0d64.js')}}" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
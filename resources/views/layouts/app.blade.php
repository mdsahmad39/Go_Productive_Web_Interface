<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'GoProductive') }}</title>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/main.css" />
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <style>
        .card-new-task {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
@include('inc.navbar')
<div id="container">
    <main class="py-4">
            @include('inc.messages')
            @yield('content')
    </main>
</div>
</body>
</html>

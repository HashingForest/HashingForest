<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.typekit.net/phg3vkq.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <script defer src="{{ asset('/vendor/fontawesome/js/fontawesome-all.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">

        @yield('content')

        @include('blocks.footer')
    </div>

    {{-- Main Script Files --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
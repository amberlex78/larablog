<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <link href="{{ mix('css/vendor.css', 'front-vendor') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css', 'front') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="d-flex flex-column h-100">
@yield('body')
<script src="{{ mix('js/vendor.js', 'front-vendor') }}"></script>
<script src="{{ mix('js/app.js', 'front') }}"></script>
@stack('scripts')
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ mix('css/vendor.css', 'admin-vendor') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css', 'admin') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-dark">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 mt-5 mb-5">
                    @include('admin.embed.message')
                    <div class="card">
                        <div class="card-header bg-primary text-center text-white">
                            <h3 class="mt-2">@yield('cardTitle')</h3>
                        </div>
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="{{ mix('js/vendor.js', 'admin-vendor') }}"></script>
<script src="{{ mix('js/app.js', 'admin') }}"></script>
@stack('scripts')
</body>
</html>

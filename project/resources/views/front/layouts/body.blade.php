@extends('front.layouts.app')

@section('body')
    <header>
        @include('front.embed.header')
    </header>
    <main class="flex-shrink-0">
        <div class="container mt-4">
            @include('front.embed.message')
            <div class="row">
                <div class="col-lg-9">
                    @yield('content')
                </div>
                <div class="col-lg-3">
                    @include('front.embed.sidebar')
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-light">
        @include('front.embed.footer')
    </footer>
@endsection

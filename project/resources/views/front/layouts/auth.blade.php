@extends('front.layouts.app')

@section('body')
    <header>
        @include('front.embed.header')
    </header>
    <main class="flex-shrink-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 mt-5 mb-5">
                    @include('front.embed.message')
                    <div class="card border-0 shadow">
                        <div class="card-header bg-primary text-center text-white">
                            <h3 class="mt-2">@yield('cardTitle')</h3>
                        </div>
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-light">
        @include('front.embed.footer')
    </footer>
@endsection

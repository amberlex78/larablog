@extends('front.layouts.auth')

@section('cardTitle')
    Login
@endsection

@section('content')
    <p>Log in to continue</p>
    <form action="{{ route('front.auth.login') }}" method="post">
        @csrf
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button type="submit" class="btn btn-primary d-inline">Login</button>
            <a class="small" href="#">Forgot Password?</a>
        </div>
    </form>
@endsection

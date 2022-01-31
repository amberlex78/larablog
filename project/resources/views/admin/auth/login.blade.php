@extends('admin.layouts.auth')

@section('cardTitle')
    Login
@endsection

@section('content')
    <p>Log in to continue</p>
    <form method="post" action="{{ route('admin.auth.login') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="email" value="{{ old('email') }}" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus/>
            <label for="inputEmail">Email Address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required/>
            <label for="inputPassword">Password</label>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="remember_me" id="inputRememberMe" class="form-check-input">
            <label class="form-check-label" for="inputRememberMe">Remember Me</label>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button type="submit" class="btn btn-primary d-inline">Login</button>
            <a class="small" href="#">Forgot Password?</a>
        </div>
    </form>
@endsection

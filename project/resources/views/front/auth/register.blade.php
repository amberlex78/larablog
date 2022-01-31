@extends('front.layouts.auth')

@section('cardTitle')
    Sign up
@endsection

@section('content')
    <p>Sign up for your account</p>
    <form action="{{ route('front.auth.register') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary d-inline">Sign up</button>
    </form>
@endsection

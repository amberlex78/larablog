@extends('front.layouts.body')

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="display-5">{{ $model->title }}</h1>
            {!! $model->content  !!}
        </div>
    </div>
@endsection

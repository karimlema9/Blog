@extends('dashboard.master')

@section('content')
    @include('dashboard.partials.validation_error')
    <form action="{{ route("user.store") }}" method="POST">
        @include('dashboard.user._from',['pasw' => true])
    </form>

@endsection

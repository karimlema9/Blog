@extends('dashboard.master')

@section('content')

    <form action="{{ route("user.store") }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nombre</label>
            <input readonly type="text" class="form-control" name="name" value="{{ $user->name  }}">
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input readonly type="text" class="form-control" name="surname" value="{{ $user->surname }}">
        </div>
    </form>

@endsection

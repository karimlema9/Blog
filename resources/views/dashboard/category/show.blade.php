@extends('dashboard.master')

@section('content')

    <form action="{{ route("category.store") }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Titulo</label>
            <input readonly type="text" class="form-control" name="title" value="{{ $category->title  }}">
        </div>
        <div class="form-group">
            <label>Url limpia</label>
            <input readonly type="text" class="form-control" name="url_clean" value="{{ $category->url_clean }}">
        </div>
    </form>

@endsection

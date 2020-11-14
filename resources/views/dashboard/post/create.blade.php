@extends('dashboard.master')

@section('content')
@include('dashboard.partials.validation_error')
    <form action="{{ route("post.store") }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="title">
                    </div>
        <div class="form-group">
            <label>Url limpia</label>
            <input type="text" class="form-control" name="url_clean">
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection

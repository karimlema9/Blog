@extends('dashboard.master')

@section('content')

    <form action="{{ route("post.store") }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Titulo</label>
            <input readonly type="text" class="form-control" name="title" value="{{ $post->title  }}">
        </div>
        <div class="form-group">
            <label>Url limpia</label>
            <input readonly type="text" class="form-control" name="url_clean" value="{{ $post->url_clean }}">
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea readonly class="form-control" id="content" rows="3"
                      name="content"> {{ $post->content }}</textarea>
        </div>
    </form>

@endsection

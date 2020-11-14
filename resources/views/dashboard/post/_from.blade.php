@csrf
<div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
</div>
<div class="form-group">
    <label>Url limpia</label>
    <input type="text" class="form-control" name="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
</div>
<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" id="content" rows="3" name="content"> {{ old('content', $post->content) }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>

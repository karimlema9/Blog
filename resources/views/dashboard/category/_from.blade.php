@csrf
<div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" name="title" value="{{ old('title', $category->title) }}">
</div>
<div class="form-group">
    <label>Url limpia</label>
    <input type="text" class="form-control" name="url_clean" value="{{ old('url_clean', $category->url_clean) }}">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>

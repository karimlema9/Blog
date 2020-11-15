@csrf
<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
</div>
<div class="form-group">
    <label>Apellido</label>
    <input type="text" class="form-control" name="surname" value="{{ old('surname', $user->surname) }}">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
</div>
@if($pasw)
<div class="form-group">
    <label>Contrasenya</label>
    <input type="password" class="form-control" name="password" value="{{ old('password', $user->password) }}">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>

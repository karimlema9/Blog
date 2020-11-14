<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie-edge"/>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <title>Modulo admin</title>
</head>
<body>

@include('dashboard.partials.nav_header_menu')

<div class="container">
    @include('dashboard.partials.session_status')
    @yield('content')
</div>
<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos</title>
</head>
<body>
    <h1>Bienvenid@s a Laravel</h1>
    <hr>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <p>/</p>
        <a href="{{ route('nosotros') }}">Sobre nosotros</a>
        <p>/</p>
        <a href="{{ route('proyecto') }}">Proyecto</a>
        <a href="{{ route('detalles') }}">Detalles</a>
    </nav>
    <header>
        <div class="detalle-notas">
            @yield('nota')
        </div>
        @yield('apartado')
    </header>
</body>
</html>
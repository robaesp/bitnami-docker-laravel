<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos</title>
</head>
<body>
    <h1>Bienvenid@s a FOTO BLOG</h1>
    <hr>
    <nav>
        <a href="{{ route('inicio2') }}">Inicio</a>
        <p>/</p>
        <a href="{{ route('nosotros2') }}">Sobre nosotros</a>
        <p>/</p>
        <a href="{{ route('fotos') }}">Fotos</a>
        <p>/</p>
        <a href="{{ route('notas') }}">Notas</a>
        <p>/</p>
        <a href="{{ route('usuarios') }}">Usuarios</a>
    </nav>
    <header>
        @yield('apartado')
    </header>
</body>
</html>
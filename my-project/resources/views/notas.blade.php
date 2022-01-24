@extends('ejercicio702')
@section('apartado')
<h1>
    Listado de notas
</h1>

<form action="{{ route('notas.crear') }}" method="POST">
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

    <input type="text" name="nombre" placeholder="Nombre de la nota" class="form-control mb-2" autofocus>
    <input type="text" name="descripcion" placeholder="Descripción de la nota" class="form-control mb-2">

    <button class="btn btn-primary btn-block" type="submit">
      Crear nueva nota
    </button>
</form>
@if (session('mensaje'))
  <div class="mensaje-nota-creada">
      {{ session('mensaje') }}
  </div>
@endif

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $nota)
        <tr>
            <td>
                <a href="{{route('notas.detalle', $nota->id) }}">
                    {{ $nota->nombre }}
                </a>
                </td>
            <td>{{ $nota->descripcion}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


@extends('ejercicio702')

@section('apartado')
    <h2>Estas en la sección nosotros</h2>

    @foreach ($equipo as $trabajador){
        <a href="{{ route ('nosotros2', $trabajador) }}">
            {{ $trabajador }}
        </a>
    }
    @endforeach
        @if(!empty($nombre))
        <h2>{{$nombre}}</h2>
            @switch($nombre)
                @case('Pepe')
                <p>{{ $nombre }} El pepe </p>
                @break
   
                @case('Lorena')
                <p>{{ $nombre }} La lorena </p>
                @break

                @case('Juan')
                <p>{{ $nombre }} El juan </p>
                
            @endswitch
        @endif    
@endsection
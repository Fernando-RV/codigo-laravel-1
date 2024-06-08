@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>Servicios</h2>
    <ul>
        @if($servicios)
            @foreach($servicios as $servicio)
                <li><a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a></li>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar</li>
        @endif
    </ul>

@endsection
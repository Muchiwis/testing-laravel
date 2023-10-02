@extends('layouts.plantilla')

@section('contenido')
    <h2>Hola profesor</h2>
    <a href="{{route('profesor.create')}}">Crear Profesor</a>
    <ul>
        @foreach($query as $item)
        <li>
            <a href="{{route('profesor.consultar',['id' => $item->id])}}">{{$item->nombre}}</a>
        </li>
        @endforeach
    </ul>

    {{$query->links()}}
@endsection

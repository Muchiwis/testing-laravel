@extends('layouts.plantilla')

@section('title_profesor')


<h1>Bienvenido profesor: {{$query->nombre}}</h1>

<h2>Su DNI es: {{$query->dni}}</h2>

<a href="{{route('profesor.index')}}">Volver</a>
<a href="{{route('profesor.edit',['profesor' => $query->id])}}">Editar curso</a>
@endsection
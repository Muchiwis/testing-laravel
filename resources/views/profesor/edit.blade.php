@extends('layouts.plantilla')
@section('form_actualizar')
<h1>Actualizar registro</h1>
<form action="{{route('profesor.update',['profesor' => $query->id])}}" method="POST">
    @csrf
    @method('put')


    <label for="">
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{ old('nombre', $query->nombre)}}">
    </label>
    <br>

    @error('nombre')
        <span>* {{ $message }}</span>
    @enderror

    <label for="">
        DNI:    
        <br>
        <input type="text" name="dni" value="{{ old('dni', $query->dni)}}">
    </label>
    <br>

    @error('dni')
        <span>* {{ $message }}</span>
    @enderror

    <br>
    <input type="submit" value="actualizar">
</form>
@endsection
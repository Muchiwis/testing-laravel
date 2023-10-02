@extends('layouts.plantilla')

@section('formulario')
    <form action="{{route('profesor.store')}}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>

        @error('nombre')
            <br>
            <span>* {{ $message }}</span>
        @enderror
        <br>
        <label for="">
            DNI:
            <br>
            <input type="number" name="dni" value="{{old('dni')}}">
        </label>
        @error('dni')
            <br>    
           <span>* {{ $message }}</span> 
        @enderror
        <br><br>
        <input type="submit" value="Registrar">
    </form>
@endsection
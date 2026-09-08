@extends('layout')

@section('titulo', 'Editar Animal')

@section('contenido')
    <form action="/animales/{{ $animal['id'] }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $animal['nombre'] }}" required>

        <label>Especie:</label>
        <input type="text" name="especie" value="{{ $animal['especie'] }}" required>

        <button type="submit" class="btn btn-edit">Actualizar</button>
        <a href="/animales">Cancelar</a>
    </form>
@endsection
{{-- Vista con el formulario para editar un animal existente --}}
@extends('layout')

@section('titulo', 'Editar Animal')

@section('contenido')
    {{-- @method('PUT') simula el método HTTP PUT, ya que los formularios HTML no lo soportan nativamente --}}
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
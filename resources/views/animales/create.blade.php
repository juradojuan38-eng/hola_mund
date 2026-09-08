@extends('layout')

@section('titulo', 'Nuevo Animal')

@section('contenido')
    <form action="/animales" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Especie:</label>
        <input type="text" name="especie" required>

        <button type="submit" class="btn btn-new">Guardar</button>
        <a href="/animales">Cancelar</a>
    </form>
@endsection
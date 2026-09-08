{{-- Vista que lista todos los animales guardados en sesión --}}
@extends('layout')

@section('titulo', 'Lista de Animales')

@section('contenido')
    {{-- Botón para ir al formulario de creación --}}
    <a href="/animales/crear" class="btn btn-new">+ Nuevo Animal</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Acciones</th>
        </tr>
        {{-- Recorremos el arreglo de animales; si está vacío, mostramos un mensaje --}}
        @forelse ($animales as $animal)
            <tr>
                <td>{{ $animal['id'] }}</td>
                <td>{{ $animal['nombre'] }}</td>
                <td>{{ $animal['especie'] }}</td>
                <td>
                    <a href="/animales/{{ $animal['id'] }}/editar" class="btn btn-edit">Editar</a>

                    {{-- Formulario con método PUT/DELETE simulado vía @method --}}
                    <form class="inline" action="/animales/{{ $animal['id'] }}" method="POST" onsubmit="return confirm('¿Seguro que querés eliminar este animal?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay animales cargados todavía.</td>
            </tr>
        @endforelse
    </table>
@endsection
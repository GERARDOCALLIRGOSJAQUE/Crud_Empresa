@extends('layouts.app')

@section('contenido')
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2>Catálogo de Productos</h2>
        <a href="{{ route('productos.create') }}" class="btn btn-crear">+ Nuevo Producto</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>S/ {{ number_format($p->precio, 2) }}</td>
                    <td>{{ $p->stock }} unidades</td>
                    <td>
                        <a href="{{ route('productos.edit', $p) }}" class="btn btn-editar">Editar</a>
                        
                        <form action="{{ route('productos.destroy', $p) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-eliminar" onclick="return confirm('¿Deseas eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">No hay productos registrados en el sistema.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
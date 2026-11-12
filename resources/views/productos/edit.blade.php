@extends('layouts.app')

@section('contenido')
    <h2>Editar Producto</h2>

    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="campo">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required>
            @error('nombre') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="campo">
            <label for="precio">Precio (S/):</label>
            <input type="number" step="0.01" id="precio" name="precio" value="{{ old('precio', $producto->precio) }}" required>
            @error('precio') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="campo">
            <label for="stock">Stock Disponible:</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" required>
            @error('stock') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-crear">Actualizar Cambios</button>
        <a href="{{ route('productos.index') }}" style="margin-left: 10px; text-decoration: none; color: #64748b;">Cancelar</a>
    </form>
@endsection
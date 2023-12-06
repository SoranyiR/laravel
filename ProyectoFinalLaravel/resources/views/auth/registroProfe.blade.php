<!-- resources/views/admin/registrar_profesor.blade.php -->

@extends('layouts.app')  <!-- Puedes usar un layout base si lo tienes -->

@section('titulo')
    Regístrate
@endsection

@section('contenido')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Registrar Profesor</h2>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 border-l-4 border-green-600 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('registrar_profesor') }}" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-600">Nombre:</label>
            <input type="text" name="name" class="form-input mt-1 block w-full" required>
        </div>
        <div class="mb-4">
            <label for="apellido" class="block text-gray-600">Apellido:</label>
            <input type="text" name="apellido" class="form-input mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-600">Correo Electrónico:</label>
            <input type="email" name="email" class="form-input mt-1 block w-full" required>
        </div>
        <div class="mb-4">
            <label for="area" class="block text-gray-600">Area de especializacion:</label>
            <input type="text" name="area" class="form-input mt-1 block w-full" required>
        </div>

        <!-- Agrega más campos según sea necesario -->

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Registrar Profesor</button>
    </form>
</div>

@endsection

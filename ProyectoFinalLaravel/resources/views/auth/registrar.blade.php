@extends('layouts.app')

@section('titulo')
    Regístrate
@endsection

@section('contenido')
    <div class="flex flex-col md:flex-row justify-center items-center gap-10 p-5">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('img/program_register.jpg') }}" alt="Imagen registro de usuarios" class="w-full h-auto rounded-lg shadow-md">
        </div>

        <div class="w-full md:w-1/2 bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-4 text-blue-500">Registro de Usuarios</h2>

            <form action="{{ route('registrarUsuario') }}" method="POST" class="space-y-4">
                @csrf

                {{-- Nombre --}}
                <div>
                    <label for="name" class="block text-gray-700">Nombre:</label>
                    <input type="text" name="nombre" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>

                {{-- Apellido --}}
                <div>
                    <label for="apellido" class="block text-gray-700">Apellido:</label>
                    <input type="text" name="apellido" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" name="email" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>

                {{-- Rol --}}
                <div>
                    <label for="rol" class="block text-gray-700">Rol:</label>
                    <select name="rol" class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        <option value="administrador">Administrador</option>
                        <option value="profesor">Profesor</option>
                    </select>
                </div>

                {{-- Área de Especialización --}}
                <div>
                    <label for="area_especializacion" class="block text-gray-700">Área de Especialización:</label>
                    <input type="text" name="area_especializacion" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>

                {{-- Botón de Registro --}}
                <div>
                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Registrar Usuario</button>
                </div>
            </form>
        </div>
    </div>
@endsection

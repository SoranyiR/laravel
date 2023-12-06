@extends('layouts.app')

@section('titulo')
    Regístrate
@endsection

@section('contenido')
    <div class="flex flex-col md:flex-row justify-center items-center gap-10 p-5">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('img/program_register.jpg') }}" alt="Imagen registro de usuarios"
                class="w-full h-auto rounded-lg shadow-md">
        </div>

        <div class="w-full md:w-1/2 bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-4 text-blue-500">Registro de Usuarios</h2>





            <div>
                <button type="submit"
                    class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium
                     text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Profesor</button>
            </div>
            <div>
                <a href="{{ route('registrar_profesor') }}">
                    <button type="submit"
                        class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium
                     text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Admin</button>
                </a>
            </div>

        </div>
    </div>
@endsection

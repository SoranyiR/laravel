<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showRegistrarProfesorForm()
    {
        return view('auth.registroProfe');
    }

    public function registrarProfesor(Request $request)
    {
        // Validación de datos
        $this->validate($request, [
            'name' => 'required|max:30',
            'apellido' => 'required|max:30',
            'email' => 'required|email|unique:users,email', // Reemplaza 'profesores' con el nombre de tu tabla de profesores
            'area' => 'required',
            // Agrega más validaciones según sea necesario
        ]);

        // Crear nuevo profesor
        User::create([
            'name' => $request->name,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'area' => $request->area,
            // Agrega más campos según sea necesario
        ]);

        return redirect()->route('registrar_profesor')->with('success', 'Profesor registrado exitosamente');
    }
}
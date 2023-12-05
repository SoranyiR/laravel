<?php

// app/Http/Controllers/UsuarioController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function mostrarFormularioRegistro()
    {
        return view('auth.registrar');
    }

    public function registrarUsuario(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'contraseña' => 'required|min:8',
            'rol' => 'required|in:administrador,estudiante,profesor',
            'fechanacimiento' => 'required',
        ]);

        
        $nuevoUsuario = new User;
        $nuevoUsuario->name = $request->name;
        $nuevoUsuario->apellido = $request->apellido;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->contraseña = Hash::make($request->contraseña);
        $nuevoUsuario->rol = $request->rol;
        $nuevoUsuario->fechanacimiento = $request->fechanacimiento;

        $nuevoUsuario->save();

        
        return redirect()->route('inicio')->with('success', 'Usuario registrado correctamente');
    }
}

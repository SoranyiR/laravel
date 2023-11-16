<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = User::all();

        return view('auth.listar', ['usuarios' => $usuarios]);
    }

    public function mostrarFormularioActualizar($id)
    {
        $usuario = User::find($id);

        return view('auth.editar', ['usuario' => $usuario]);
    }

    public function actualizarUsuario(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cedula' => 'required|numeric',
            'numero_telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
        ]);

        $usuario = User::find($id);

        $usuario->update([
            'name' => $request->input('name'),
            'cedula' => $request->input('cedula'),
            'numero_telefono' => $request->input('numero_telefono'),
            'direccion' => $request->input('direccion'),
        ]);

        return redirect()->route('listar')->with('success', 'Usuario actualizado correctamente');
    }
    public function eliminar($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('listar');
    }

    // Generar PDF
    public function pdf($id)
    {
        $userFind = User::find($id);
        // die($userFind);
        $pdf = PDF::LoadView('auth.pdf', compact("userFind"));

        return $pdf->stream();
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

// En routes/web.php

Route::get('/registro', [UsuarioController::class, 'mostrarFormularioRegistro'])->name('registro');
Route::post('/registrar-usuario', [UsuarioController::class, 'registrarUsuario'])->name('registrarUsuario');

Route::get('/admin/registrar-profesor', [AdminController::class, 'showRegistrarProfesorForm'])->name('registrar_profesor');
Route::post('/admin/registrar-profesor', [AdminController::class, 'registrarProfesor']);

<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('Estudiante', EstudianteController::class);
Route::resource('Materia', MateriaController::class)->parameters(["Materia" => "materia"
]);


Route::post('/Estudiante/nuevaMateria/{Estudiante}', [EstudianteController::class,'agregarMateria'])->name('agregarMaterias');

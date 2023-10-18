<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;


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

/*
Route::get('/', 'PacienteController@index'); //Pagina principal
Route::get('/consulta-paciente', 'PacienteController@showConsultaForm'); //Formulario consulta de paciente
Route::post('/consulta-paciente', 'PacienteController@consultarPaciente'); //Procesar consulta
Route::get('/nuevo-paciente', 'PacienteController@showNuevoForm'); //Formulario de creación
Route::post('/nuevo-paciente', 'PacienteController@guardarNuevoPaciente'); //Procesar creación 
*/


Route::get('/', [PacienteController::class, 'index']); //Pagina principal
Route::get('/consulta-paciente', [PacienteController::class, 'ShowConsultaForm']); //Formulario consulta de paciente
Route::post('/consulta-paciente', [PacienteController::class, 'consultaPaciente']); //Procesar consulta
Route::get('/nuevo-paciente', [PacienteController::class, 'showNewForm']); //Formulario de creación
Route::post('/nuevo-paciente', [PacienteController::class, 'guardarNuevoPaciente']); //Procesar creación 
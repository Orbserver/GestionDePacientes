<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\pruebaController;

Route::get('/', [PacienteController::class, 'index']); //Pagina principal
Route::get('/consulta-paciente', [PacienteController::class, 'consultaPaciente']); //Formulario consulta de paciente
Route::post('/procesar-consulta', [PacienteController::class, 'procesarConsulta']); //Procesar consulta
Route::post('/resultados-consulta', [PacienteController::class, 'resultadosConsulta']);
Route::get('/nuevo-paciente', [PacienteController::class, 'nuevoPaciente']); //Formulario de creación
Route::post('/procesar-nuevo', [PacienteController::class, 'procesarNuevo']); //Procesar creación 
Route::post('/resultado-nuevo', [PacienteController::class, 'resultadoNuevo']);

Route::any('/test', [pruebaController::class, 'prueba']);
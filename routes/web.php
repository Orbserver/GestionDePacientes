<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

Route::get('/', [PacienteController::class, 'index']); //Pagina principal
Route::get('/consulta-paciente', [PacienteController::class, 'consultaPaciente']); //Formulario consulta de paciente
Route::post('/consulta-paciente', [PacienteController::class, 'consultarPaciente']); //Procesar consulta
Route::get('/nuevo-paciente', [PacienteController::class, 'nuevoPaciente']); //Formulario de creación
Route::post('/nuevo-paciente', [PacienteController::class, 'guardarNuevoPaciente']); //Procesar creación 
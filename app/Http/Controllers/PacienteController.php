<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index() {
        //Logica para mostrar la pagina principal con las opciones
        return view('index');
    }

    public function showConsultaForm() {
        // logica para mostrar el formulario de consulta
        return view('consulta_paciente');
    }

    public function consultarPaciente(Request $request) {
        //Logica para procesar la consulta y mostrar resultados
        //Se puede acceder a los datos del formulario usando $request
        return view('resultados_consulta');
    }

    public function showNewForm() {
        //Logica para mostrar el formulario de creacion de nuevo paciente
        return view('showNewForm');
    }

    public function guardarNuevoPaciente(Request $request) {
        //Loigca para procesar la creacion de un nuevo paciente
        //Puedes acceder a los datos del formulario usando $request
        //Si se guarda con exito, muestra un mensaje de exito; de lo contrario muestra un mensaje de error
        return view('resultado_creacion');
    }
}
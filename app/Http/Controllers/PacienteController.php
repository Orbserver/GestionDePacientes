<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Paciente;

class PacienteController extends Controller
{
    //Pagina principal
    public function index() {
        return view('index');
    }

    //Formulario de consulta
    public function consultaPaciente() {
        return view('consulta_paciente');
    }

    //Procesamiento de consulta y presentacion de los datos
    public function consultarPaciente(request $request) {
        $request->validate([
            'nombre' => 'required_without_all:primer_apellido,segundo_apellido,fecha_nacimiento,telefono|string|max:255',
            'primer_apellido' => 'required_without_all:nombre,segundo_apellido,fecha_nacimiento,telefono|string|max:255',
            'segundo_apellido' => 'required_without_all:nombre,primer_apellido,fecha_nacimiento,telefono|string|max:255',
            'fecha_nacimiento' => 'required_without_all:nombre,primer_apellido,segundo_apellido,telefono|date',
            'telefono' => 'required_without_all:,nombre,primer_apellido,segundo_apellido,fecha_nacimiento|string|max:20',
        ]);
        //Logica para procesar la consulta y mostrar resultados
        //Se puede acceder a los datos del formulario usando $request
        return view('consultar_paciente');
    }

    //Formulario de nuevo paciente
    public function nuevoPaciente() {
        return view('nuevo_paciente');
    }

    //Procesamiento de creacion de nuevo paciente
    public function guardarNuevoPaciente(request $request) {
        $request->validate(Paciente::$rules);
        //Logica para procesar la creacion de un nuevo paciente
        //Puedes acceder a los datos del formulario usando $request
        //Si se guarda con exito, muestra un mensaje de exito; de lo contrario muestra un mensaje de error
        return view('resultado_creacion');
    }
}
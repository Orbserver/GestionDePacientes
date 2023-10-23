<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Paciente;

class PacienteController extends Controller
{

    protected function ValidarDatos(request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:pacientes,email',
        ]);
    }

    public function index() {
        //Logica para mostrar la pagina principal con las opciones
        return view('index');
    }

    public function showConsultaForm() {
        // logica para mostrar el formulario de consulta
        return view('consulta_paciente');
    }

    public function consultaPaciente(request $request) {
        $request->validate([
            'nombre' => 'required_without_all:primer_apellido,segundo_apellido,fecha_nacimiento,telefono,email|string|max:255',
            'primer_apellido' => 'required_without_all:nombre,segundo_apellido,fecha_nacimiento,telefono,email|string|max:255',
            'segundo_apellido' => 'required_without_all:nombre,primer_apellido,fecha_nacimiento,telefono,email|string|max:255',
            'fecha_nacimiento' => 'required_without_all:nombre,primer_apellido,segundo_apellido,telefono,email|date',
            'telefono' => 'required_without_all:,nombre,primer_apellido,segundo_apellido,fecha_nacimiento,email|string|max:20',
            'email' => 'required_without_all:nombre,primer_apellido,segundo_apellido,fecha_nacimiento,telefono|email',
        ]);
        //Logica para procesar la consulta y mostrar resultados
        //Se puede acceder a los datos del formulario usando $request
        return view('resultados_consulta');
    }

    public function showNewForm() {
        //Logica para mostrar el formulario de creacion de nuevo paciente
        return view('showNewForm');
    }

    public function guardarNuevoPaciente(request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:Pacientes,email',
        ]);
        //Logica para procesar la creacion de un nuevo paciente
        //Puedes acceder a los datos del formulario usando $request
        //Si se guarda con exito, muestra un mensaje de exito; de lo contrario muestra un mensaje de error
        return view('resultado_creacion');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'Pacientes';

    protected $fillable = [
        'nombre',
        'primerE_apellido',
        'segundo_apellido',
        'fecha_nacimiento',
        'telefono',
        'email',
    ];

    public $rules = [
        'nombre' => 'required|string|max:255',
        'primer_apellido' => 'required|string|max:255',
        'segundo_apellido' => 'nullable|string|max:255',
        'fecha_nacimiento' => 'required|date',
        'telefono' => 'required|string|max:20',
        'email' => 'required|email|unique:Paciente,email',
    ];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function prueba()
    {
        try {
            // Intenta realizar una consulta sencilla a la base de datos
            $result = DB::select('SELECT 1');
            
            // Si no se lanza una excepción, la conexión fue exitosa
            return "Conexión exitosa a la base de datos PostgreSQL";
        } catch (\Exception $e) {
            return "Error al conectar a la base de datos: " . $e->getMessage();
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class prueba extends Controller
{
    public function testDBCon()
    {
        try {
            $result = DB::select('SELECT 1');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
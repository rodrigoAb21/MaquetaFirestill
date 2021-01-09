<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function contratos()
    {
        return view('vistas.mantenimiento.contratos');
    }

    public function agenda()
    {
        return view('vistas.mantenimiento.agenda');
    }

}

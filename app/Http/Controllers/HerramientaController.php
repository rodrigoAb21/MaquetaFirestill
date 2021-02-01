<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    public function listaPrincipal()
    {
        return view('vistas.herramientas.listaPrincipal');
    }

    public function listaIngresos()
    {
        return view('vistas.herramientas.listaIngresos');
    }

    public function nuevoIngreso()
    {
        return view('vistas.herramientas.nuevoIngreso');
    }

    public function listaBajas()
    {
        return view('vistas.herramientas.listaBajas');
    }

    public function listaAsignaciones()
    {
        return view('vistas.herramientas.listaAsignaciones');
    }

    public function nuevaAsignacion()
    {
        return view('vistas.herramientas.nuevaAsignacion');
    }

    public function reingreso()
    {
        return view('vistas.herramientas.reingreso');
    }

    public function nuevaHerramienta()
    {
        return view('vistas.herramientas.nuevaHerramienta');
    }



}

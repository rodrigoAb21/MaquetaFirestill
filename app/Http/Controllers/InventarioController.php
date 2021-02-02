<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function listaPrincipal()
    {
        return view('vistas.inventario.listaPrincipal');
    }

    public function listaIngresos()
    {
        return view('vistas.inventario.listaIngresos');
    }

    public function nuevoIngreso()
    {
        return view('vistas.inventario.nuevoIngreso');
    }

    public function listaBajas()
    {
        return view('vistas.inventario.listaBajas');
    }

    public function verIngreso()
    {
        return view('vistas.inventario.verIngreso');
    }

    public function verProducto()
    {
        return view('vistas.inventario.verProducto');
    }
}

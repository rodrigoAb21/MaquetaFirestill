<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function index()
    {
        return view('vistas.proveedores.index');
    }

    public function create()
    {
        return view('vistas.proveedores.create');
    }

    public function edit($id)
    {
        return view('vistas.proveedores.edit');
    }
}

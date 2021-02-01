<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        return view('vistas.ventas.index');
    }

    public function create()
    {
        return view('vistas.ventas.create');
    }

    public function show($id)
    {
        return view('vistas.ventas.show');
    }
}

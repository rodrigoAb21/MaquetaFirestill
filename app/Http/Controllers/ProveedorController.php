<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProveedorController extends Controller
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

    public function show($id)
    {
        return view('vistas.proveedores.show');
    }

}

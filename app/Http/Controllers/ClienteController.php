<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        return view('vistas.clientes.index');
    }

    public function create()
    {
        return view('vistas.clientes.create');
    }

}

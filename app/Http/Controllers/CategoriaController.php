<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('vistas.categorias.index');
    }

    public function create()
    {
        return view('vistas.categorias.create');
    }
}

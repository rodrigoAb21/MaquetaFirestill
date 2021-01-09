<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        return view('vistas.personal.index');
    }

    public function create()
    {
        return view('vistas.personal.create');
    }
}

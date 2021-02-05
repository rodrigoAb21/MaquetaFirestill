<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertaController extends Controller
{
    function index(){
        return view('vistas.alertas.index');
    }
}

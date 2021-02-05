<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    function index(){
        return view('vistas.notificaciones.index');
    }
}

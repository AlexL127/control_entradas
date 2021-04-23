<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function empleados(){
        return view('dashboard.empleados');
    }

    public function registro_entrada(){
        return view('dashboard.re_entradas');
    }

    public function registro_salida(){
        return view('dashboard.re_salidas');
    }
    public function registro_asistencias(){
        return view('dashboard.asistencias');
    }
}

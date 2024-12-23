<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Lógica para mostrar la página principal de reportes
        return view('reportes.index');
    }

    public function impuestos()
    {
        // Lógica para generar el reporte de impuestos mensuales
        return view('reportes.impuestos');
    }

    public function resumen()
    {
        // Lógica para generar el reporte resumen mensual
        return view('reportes.resumen');
    }
}

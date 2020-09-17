<?php

namespace App\Http\Controllers;

use App\Models\Ingresos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$ingresos = Ingresos::where('tipo', 'Ingreso')->whereMonth('fecha', '=', date('m'))->get();
    	$total = 0;
        return view('dashboard.dashboard', [
        	'ingresos' => $ingresos,
        	'total' => $total,
        ]);
    }
}

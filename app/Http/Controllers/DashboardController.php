<?php

namespace App\Http\Controllers;

use App\Models\Ingresos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$ingresos = new Ingresos;
        return view('dashboard.dashboard', [
        	'ingresos' => $ingresos,
        ]);
    }
}

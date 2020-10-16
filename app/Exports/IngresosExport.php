<?php

namespace App\Exports;

use App\Models\Ingresos;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class IngresosExport implements FromView
{
		use Exportable;

    public function view(): View{
    	return view('exports.ingresos', [
    		'ingresos' => Ingresos::all()
    	]);
    }
}

<?php

namespace App\Exports;

use App\Models\insumos;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class InsumosExport implements FromView
{
	use Exportable;

    public function view(): View{
    	return view('exports.insumos', [
    		'insumos' => insumos::all()
    	]);
    }
}

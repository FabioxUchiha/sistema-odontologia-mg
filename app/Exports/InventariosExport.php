<?php

namespace App\Exports;

use App\Models\Inventario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class InventariosExport implements FromView
{
	use Exportable;

    public function view(): View{
    	return view('exports.inventarios', [
    		'inventarios' => Inventario::all()
    	]);
    }
}

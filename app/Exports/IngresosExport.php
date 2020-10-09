<?php

namespace App\Exports;

use App\Models\Ingresos;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class IngresosExport implements FromCollection
{
		use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ingresos::all();
    }
}

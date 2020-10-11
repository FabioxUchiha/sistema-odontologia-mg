<?php

namespace App\Http\Requests;

use App\Models\DesplegableServicioIngreso;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDesplegableServicioIngresoRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nombre' => ['required',
            Rule::unique('desplegable_servicio_ingresos')->ignore( $this->route('desplegableServicioIngreso') )
        ]
        ];
        return $rules;
    }
}

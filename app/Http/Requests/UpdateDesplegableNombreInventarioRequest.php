<?php

namespace App\Http\Requests;

use App\Models\DesplegableNombreInventario;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDesplegableNombreInventarioRequest extends FormRequest
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
             Rule::unique('desplegable_nombre_inventarios')->ignore( $this->route('desplegableNombreInventario') )
         ]
        ];
        return $rules;
    }
}

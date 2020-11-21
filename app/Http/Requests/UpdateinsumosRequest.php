<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\insumos;

class UpdateinsumosRequest extends FormRequest
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
            'nombre' => ['required'],
            'fecha_de_compra' => ['required'],
            'cantidad' => ['required', 'numeric', 'min:1'],
            'fecha_de_vencimiento' => ['required'],
            'presentacion' => ['required']
        ];
        return $rules;
    }
}

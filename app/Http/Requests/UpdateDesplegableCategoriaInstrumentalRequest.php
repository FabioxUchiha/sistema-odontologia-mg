<?php

namespace App\Http\Requests;

use App\Models\DesplegableCategoriaInstrumental;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDesplegableCategoriaInstrumentalRequest extends FormRequest
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
            Rule::unique('desplegable_categoria_instrumentals')->ignore( $this->route('desplegableCategoriaInstrumental') )
        ]
        ];
        return $rules;
    }
}

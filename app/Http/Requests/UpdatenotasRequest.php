<?php

namespace App\Http\Requests;

use App\Models\notas;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatenotasRequest extends FormRequest
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
            'documento' => ['required', 'numeric', 'min:1',
                Rule::unique('notas')->ignore( $this->route('nota') )],
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u'],
            'tipo_documento' => ['required'],
            'procedimiento' => ['required'],
            'observaciones' => ['required']
        ];
        return $rules;
    }
}

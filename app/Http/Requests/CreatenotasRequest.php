<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\notas;

class CreatenotasRequest extends FormRequest
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
            'documento' => ['required', 'unique:notas'],
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u'],
            'tipo_documento' => ['required', 'numeric', 'min:1'],
            'procedimiento' => ['required'],
            'observaciones' => ['required'],
            'telefono' => ['numeric', 'min:1']
        ];
        return $rules;
    }
}

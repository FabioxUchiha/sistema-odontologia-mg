<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Ingresos;

class UpdateIngresosRequest extends FormRequest
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
            'fecha' => ['required'],
            'tipo' => ['required'],
            'precio' => ['required', 'numeric', 'min:50'],
            'servicio' => ['required']
        ];
        return $rules;
    }
}

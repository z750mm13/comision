<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequirementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [ //'unique:requirements, numero, NULL, NULL, norm_id, '.$request['norm_id'],
            'numero' => ['required', 'string', 'min:3',],
            'descripcion' => ['required', 'string'],
            'tipo' => ['required', 'string', 'min:8'],
            'frecuencia' => ['string', 'min:3'],
            'norm_id' => ['required', 'numeric', 'not_in:0'],
        ];
    }
}

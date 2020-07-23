<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNormRequest extends FormRequest
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
    public function rules() {
        return [
            'titulo' => ['required', 'string', 'max:255'],
            'codigo' => ['required', 'string', 'max:20', 'unique:norms'],
            'direccion' => ['required', 'string', 'min:8'],
        ];
    }
}

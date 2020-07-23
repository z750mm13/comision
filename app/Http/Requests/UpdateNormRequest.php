<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Norm;

class UpdateNormRequest extends FormRequest
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
        return [
            'titulo' => ['required', 'string', 'max:255'],
            'codigo' => ['required', 'string', 'max:20'],
            'direccion' => ['required', 'string', 'min:8'],
        ];
    }
}

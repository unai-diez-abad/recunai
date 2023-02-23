<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre'=>'required|string',
            'apellidos'=>'required|string',
            'DNI'=>'required|string',
            'direcion_residencia'=>'required|string',
            'email'=> 'required|email',
            'tel'=> 'required|numeric',
        ];
    }
}

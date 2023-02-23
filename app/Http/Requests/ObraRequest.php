<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\TipoEdificio;
use App\Enums\TipoObra;
class ObraRequest extends FormRequest
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
            'tipo_edificio'=> ['required', new Enum(TipoEdificio::class)],
            'tipo_obra'=>['required', new Enum(TipoObra::class)],
            'direcion'=> 'required|string',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'date',
            'descripcion'=> 'required|string',
            'solicitante_id'=>'required',
        ];
    }
}

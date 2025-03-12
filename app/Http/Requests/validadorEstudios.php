<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorEstudios extends FormRequest
{
    /**
     * Determinar si el usuario está autorizado a realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación que se aplican al formulario.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtNombre' => 'required|min:3|max:50|string',
            'txtEspecialidad' => 'required|min:3|max:50|string',
            'txtRequisitos' => 'required|min:5|max:100|string',
            'txtPrecio' => 'required|numeric|min:1',
        ];
    }
}

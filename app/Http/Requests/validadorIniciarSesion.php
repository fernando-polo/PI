<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorIniciarSesion extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtCorreo' => 'required | email:rfc, dns',
            'txtContraseña' => 'required | min:8 | regex:/[a-z]/ | regex:/[A-Z]/ | regex:/[0-9]/ | regex:/[@$!%*#?&]/ | string',
        ];
    }
}

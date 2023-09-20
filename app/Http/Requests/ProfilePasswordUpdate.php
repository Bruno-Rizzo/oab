<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePasswordUpdate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'oldPassword'     => ['required'],
            'password'        => ['required', 'min:8'],
            'confirmPassword' => ['required', 'same:password'],
        ];
    }

    public function messages(): array
    {
        return [
            'oldPassword.required'     => 'O campo Senha Atual é obrigatório',
            'confirmPassword.required' => 'O campo Confirma Senha é obrigatório',
            'confirmPassword.same'     => 'O campo Nova Senha e Confima Senha não conferem',
        ];
    }
}

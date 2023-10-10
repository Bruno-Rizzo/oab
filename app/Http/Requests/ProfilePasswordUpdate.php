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
            'oldPassword.required'     => 'O campo senha atual é obrigatório',
            'confirmPassword.required' => 'O campo confirma senha é obrigatório',
            'confirmPassword.same'     => 'O campo nova senha e confima senha não conferem',
        ];
    }
}

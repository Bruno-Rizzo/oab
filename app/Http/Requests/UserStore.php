<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'              => ['required','min:6'],
            'email'             => ['required','email','unique:users'],
            'password'          => ['required','min:8'],
            'role_id'           => ['required'],
            'prisional_unit_id' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'             => 'O campo usuário é obrigatório',
            'email.unique'               => 'Este usuário já está sendo utilizado',
            'role_id.required'           => 'O campo função é obrigatório',
            'prisional_unit_id.required' => 'O campo lotação é obrigatório',

        ];
    }

}

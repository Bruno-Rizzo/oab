<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserUpdate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if(Auth::id() == 1){
            return [
                'name'              => ['required','min:6'],
                'email'             => ['required','email',Rule::unique('users')->ignore($this->user)],
                'identify'          => ['required','numeric',Rule::unique('users')->ignore($this->user)],
                'role_id'           => ['required'],
                'prisional_unit_id' => ['required']
            ];
        }else{
            return [
                'name'     => ['required','min:6'],
                'email'    => ['required','email',Rule::unique('users')->ignore($this->user)],
                'identify' => ['required','numeric',Rule::unique('users')->ignore($this->user)],
            ];
        }
    }

    public function messages(): array
    {
        return [
            'email.required'             => 'O campo usuário é obrigatório',
            'email.email'                => 'O campo usuário precisa do complemento @pp.rj',
            'email.unique'               => 'Este usuário já está sendo utilizado',
            'identify.required'          => 'O campo id é obrigatório',
            'identify.unique'            => 'Este id já está sendo utilizado',
            'identify.numeric'           => 'O campo id suporta apenas números',
            'role_id.required'           => 'O campo função é obrigatório',
            'prisional_unit_id.required' => 'O campo lotação é obrigatório',

        ];
    }

}

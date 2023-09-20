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
                'name'              => ['required','min:3'],
                'email'             => ['required','email',Rule::unique('users','id')->ignore($this->user)],
                'role_id'           => ['required'],
                'prisional_unit_id' => ['required']
            ];
        }else{
            return [
                'name'  => ['required','min:6'],
                'email' => ['required','email',Rule::unique('users','id')->ignore($this->user)],
            ];
        }
    }

    public function messages(): array
    {
        return [
            'email.required'             => 'O campo usuário é obrigatório',
            'role_id.required'           => 'O campo função é obrigatório',
            'prisional_unit_id.required' => 'O campo lotação é obrigatório'

        ];
    }

}

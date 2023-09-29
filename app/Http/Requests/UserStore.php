<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserStore extends FormRequest
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
                'email'             => ['required','email','unique:users'],
                'identify'          => ['required','numeric','unique:users'],
                'password'          => ['required','min:8'],
                'role_id'           => ['required'],
                'prisional_unit_id' => ['required']
            ];
        }else{
            return [
                'name'              => ['required','min:6'],
                'email'             => ['required','email','unique:users'],
                'identify'          => ['required','numeric','unique:users'],
                'password'          => ['required','min:8']
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

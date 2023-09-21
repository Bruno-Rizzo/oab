<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuditSearch extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date_initial' => ['required'],
            'date_final'   => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'date_initial.required' => 'O campo data inicial é obrigatório',
            'date_final.required'   => 'O campo data final é obrigatório'
        ];
    }
}

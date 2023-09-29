<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PrisionalUnitUpdate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'    => ['required','min:8',Rule::unique('prisional_units')->ignore($this->unit)],
            'acronym' => ['required','min:3']
        ];
    }

    public function messages(): array
    {
        return [
            'acronym.required' => 'O campo sigla é obrigatório',
            'acronym.min'      => 'O campo sigla deve conter pelo menos 3 caracteres'
        ];
    }
}

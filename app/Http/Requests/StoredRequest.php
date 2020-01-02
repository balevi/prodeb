<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'produto' => ['required', 'max:10', 'min:4'],
            'quantidade' => ['required','numeric'],
        ];
    }

    public function messages()
    {
        return [
            'produto.required' => 'O nome do produto é obrigatório',
            'produto.min' => 'O nome do produto deve ter mínimo 3 caracteres',
            'produto.max' => 'O nome do produto deve ter máximo 10 caracteres',
            'quantidade.required' => 'A quantidade de produto é obrigatório',
            'quantidade.numeric' => 'A quantidade tem que ser numérica',
        ];
    }
}

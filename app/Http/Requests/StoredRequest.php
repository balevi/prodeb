<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Produtos;

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
        $produtos = auth()->user()->id;
        return [
            'produto' => ['required','unique:produtos,produto,NULL,id,user_id,'. auth()->user()->id],
            //'produto' => ['required','unique:produtos,produto,' . auth()->user()->id],
            'quantidade' => ['required','numeric'],
        ];
        //,'max:10', 'min:4'
    }

    public function messages()
    {
        return [
            'produto.required' => 'O nome do produto é obrigatório',
            'produto.unique' => 'ja existe um produto com esse nome',
            'produto.min' => 'O nome do produto deve ter mínimo 3 caracteres',
            'produto.max' => 'O nome do produto deve ter máximo 10 caracteres',
            'quantidade.required' => 'A quantidade de produto é obrigatório',
            'quantidade.numeric' => 'A quantidade tem que ser numérica',
        ];
    }
}

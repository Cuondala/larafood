<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nomePlano'=>'required|min:3|unique:planos',
            'preco'=>'required',
            'descricao'=>'nullable|min:3'
        ];
    }

    public function messages(){
        return [
            'nomePlano.required'=>'',
            'nomePlano.min'=>'',
            'nomePlano.unique'=>'',
            'preco.required'=>'',
            'descricao.min'=>''
        ];
    }
}

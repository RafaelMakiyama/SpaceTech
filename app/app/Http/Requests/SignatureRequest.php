<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignatureRequest extends FormRequest
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
            'quanties_character' => 'required',
            'signature' => 'required',
            'number_uses'=> 'required',
        ];
    }

    public function messages(){
        return [
            'quanties_character.required' => 'A quantidade de caracteres é obrigatória',
            'signature.required' => 'A assinatura é obrigatória',
            'number_uses' => 'O número de uso da assinatura é obrigatório'
        ];
    }
}

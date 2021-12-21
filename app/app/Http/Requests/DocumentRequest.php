<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class DocumentRequest extends FormRequest
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
            'title' => 'required|min:1|max:200',
            'size'=>'required|numeric|min:1|max:200',
            'number_signature' => 'required|numeric|min:1|max:2',
            'responsable_signature' => 'required|min:10|max:200',
            'pages_quanties' => 'required|numeric|min:1|max:@',
        ]; 
    }

    public function messages()
    {
        return [
            'title.required'=> 'O campo título é obrigatório',
            'size.required' => 'O campo tamanho é obrigatorio e numérico',
            'number_signature.required' => 'O número de assinaturas é obrigatório e numérico',
            'responsable_signature.required' => 'O responsável pela assinatura é obrigatório',
            'pages_quanties.required'=> 'O número de páginas é obrigatório e númerico',
            'number_signature.min'=> 'O campo numero de assinaturas é de no minimo 1 no máximo 2',
            'number_signature.max'=> 'O campo numero de assinaturas é de no minimo 1 no máximo 2',
            'responsable_signature.min'=> 'O campo responsável pela assinatura deve conter no minimo 10 caracteres e no maximo 200',
            'responsable_signature.max'=> 'O campo responsável pela assinatura deve conter no minimo 10 caracteres e no maximo 200',
        ] ;
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Algo de errado aconteceu, siga as instruções das mensagens.',
            'data'      => $validator->errors()
        ]));
    }
}

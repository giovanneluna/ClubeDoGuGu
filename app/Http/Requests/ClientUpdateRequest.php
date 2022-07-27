<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:3',
            ],
            'email' => [
                'required',
            ],
            'cpf' => [
                'required',
                'max:11',
                'min:11',
            ],
            'telephone' => [
                'required',
                'max:11',
                'min:9',
            ],
            'age' => [
                'required',
                'between:15,100',
                'numeric',
            ],
            'address' => [
                'required',
                'min:5',
            ],
            'client_id' => [
                'required',
            ],
        ];
    }

    public function messages()

    {
        return [
            //Name
            'name.required' => 'É necessario informar o Nome do Cliente.',
            'name.min' => 'O numero minimo de letras do cliente é de 3.',

            //Email
            'email.required' => 'É necessario informar o Email do Cliente.',

            //CPF
            'cpf.required' => 'É necessario informar o CPF do Cliente',
            'cpf.min' => 'CPF invalido.',
            'cpf.max' => 'CPF invalido.',

            //Telephone
            'telephone.required' => 'É necessario informar o Telefone do Cliente',
            'telephone.min' => 'O Minimo é de 9 Números.',
            'telephone.max' => 'O Maximo é de 11 Números.',

            //Age
            'age.required' => 'É necessario informar a Idade do Cliente.',
            'age.numeric' => 'Letras não são permitidas na Idade.',
            'age.between' => 'O Usuario não possui idade para ser cadastrado(min:15).',

            //Address
            'address.required' => 'É necessario informar o Endereço do Cliente.',
            'address.min' => 'O minimo de caracteres para endereço é de 5.'
        ];
    }
}

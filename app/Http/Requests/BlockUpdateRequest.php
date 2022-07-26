<?php

namespace App\Http\Requests;

use app\Models\Block;
use Illuminate\Foundation\Http\FormRequest;

class BlockUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [

            'block_type' => [
                'required',
            ],
            'public_amount' => [
                'required',
            ],
            'is_available' => [
                'required',
                'numeric',
                'min:0',
                'max:1',
            ],

            'amount' => [
                'required',
            ],
            'local' => [
                'required',
            ]
        ];
    }

    public function messages()

    {
        return [
            //Public Amount
            'public_amount.required' => 'A capacidade total de Publico é necessaria.',

            //Is Available
            'is_available.required' => 'É necessario informar se esta ou não disponivel.',
            'is_available.numeric' => 'Pode ser usado somente 1 ou 0.',
            'is_available.min' => 'O minimo é 0 (agendada)',
            'is_available.max' => 'Utilize 1 para (disponivel) | E 0 para (agendada)',

            //Price
            'price.required' => 'O preço é obrigatorio.',

            //Amount
            'amount.required' => 'A quantidade de pessoas dentro da quadra é obrigatoria.',

            //Local
            'local.required' => 'O local é obrigatorio.',
        ];
    }
}

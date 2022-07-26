<?php

namespace App\Http\Requests;

use app\Models\Block;
use Illuminate\Foundation\Http\FormRequest;

class BlocksStoreRequest extends FormRequest
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
                'unique:blocks,block_type'
            ],
            'public_amount' => [
                'required',
                'numeric',

            ],
            'is_available' => [
                'required',
            ],
            'amount' => [
                'required',
            ],
            'local' => [
                'required',
            ],

            'sport_id' => [
                'required',
            ],

        ];
    }
    public function messages()
    {
        return [
            //BlockType
            'block_type.required' => 'O tipo de quadra tem que ser preenchido. ',
            'block_type.unique' => 'Essa quadra ja existe.',

            //Public Amount
            'public_amount.required' => 'É necessaria a quantidade total de pessoas na arquibancada.',
            'is_available.numeric' => 'Pode ser usado somente 1 ou 0.',
            'is_available.min' => 'O minimo é 0 (agendada)',
            'is_available.max' => 'Utilize 1 para (disponivel) | E 0 para (agendada)',

            //Is Available
            'is_available.required' => '(Esta Disponivel) Tem que ser preenchido. ',

            //Amount
            'amount.required' => 'A quantidade total de jogadores tem que ser preenchida. ',

            //Local
            'local.required' => 'O local tem que ser preenchido. ',

            //Sport Id
            'sport_id.required' => 'Esporte não pode estar vazio.',
        ];
    }
}

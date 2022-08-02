<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentStockStore extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'equipments_id' => [
                'required',
            ],
            'quantity' => [
                'required',
            ],
        ];
    }
    public function messages()
    {
        return [
            //Quantity
            'quantity.required' => 'É necessario informar a quantidade de equipamentos.',

            //Equipments_id
            'equipments_id' => 'É necessario informar o equipamento.',



        ];
    }
}

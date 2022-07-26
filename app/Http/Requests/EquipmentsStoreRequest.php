<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentsStoreRequest extends FormRequest
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
                'unique:equipments'
            ],
            'description' => [
                'required',
                'numeric',
            ],
            'equipment_type_id' => [
                'required',
            ],


        ];
    }

    public function messages()
    {
        return [
            //Name
            'name.required' => 'É necessario informar o nome do equipamento',

            //Description or Quantity
            'description.required' => 'É necessario informar a quantidade de equipamentos.',
            'description.numeric' => 'Letras não são aceitas (Quantidade para Criar).',

            //EquipmentType
            'equipment_type_id.required' => 'É necessario informar o tipo de equipamento.'
        ];
    }
}

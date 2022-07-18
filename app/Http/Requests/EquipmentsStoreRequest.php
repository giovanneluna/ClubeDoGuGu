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
                'unique:equipments,name'
            ],
            'quantity' => [
                'required',
            ],
            'equipment_id' => [
                'nullable',
            ]

        ];
    }
}

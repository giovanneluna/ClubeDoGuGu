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
            'equipment_id' => [
                'required',
            ],
            'quantity' => [
                'required',
            ],

        ];
    }
}

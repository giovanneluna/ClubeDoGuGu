<?php

namespace App\Http\Requests;

use app\Models\Sport;
use Illuminate\Foundation\Http\FormRequest;

class SportsStoreRequest extends FormRequest
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
            ],
            'equipments_id' => [
                'required'
            ]
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O nome é necessario.',
            'equipments_id.required' => 'O campo equipamento esta vazio.'
        ];
    }
}

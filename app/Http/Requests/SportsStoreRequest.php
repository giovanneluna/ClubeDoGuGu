<?php

namespace App\Http\Requests;

use App\Models\Sport;
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
            'sport' => [
                'required',
            ],
            'capacity' => [
                'required'
            ],
            'equipment' => [
                'required'
            ],
            'totalTime' => [
                'required'
            ],
            'value' => [
                'required',
            ]
        ];
    }
}

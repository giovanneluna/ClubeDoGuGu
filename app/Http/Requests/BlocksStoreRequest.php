<?php

namespace App\Http\Requests;

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

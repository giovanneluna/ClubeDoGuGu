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
            'blocktype' => [
                'required',
                'unique:blocks,blocktype',
            ],
            'publicamount' => [
                'required'
            ],
            'is_available' => [
                'required'
            ],
            'maxtime' => [
                'required'
            ],
            'price' => [
                'required',
            ],
            'users_id' => [
                'nullable',
            ]
        ];
    }
}

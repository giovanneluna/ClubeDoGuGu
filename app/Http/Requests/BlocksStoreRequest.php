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
                'required'
            ],
            'is_available' => [
                'required'
            ],
            'price' => [
                'required',
            ],
            'amount' => [
                'required',
            ],
            'local' => [
                'required',
            ],

        ];
    }
}

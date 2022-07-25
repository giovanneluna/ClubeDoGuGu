<?php

namespace App\Http\Requests;

use App\Models\Schedule;
use Illuminate\Foundation\Http\FormRequest;

class ScheduleUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'time' => [
                'required',
            ],
            'date' => [
                'required'
            ],
            'block_id' => [
                'required'
            ],
            'total_price' => [
                'required'
            ],
            'paid_out' => [
                'required',
            ]
        ];
    }
}

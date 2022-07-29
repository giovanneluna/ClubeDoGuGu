<?php

namespace App\Http\Requests;

use App\Models\Schedule;
use Illuminate\Foundation\Http\FormRequest;

class SchedulesStoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'block_id' => [
                'required',
            ],

            'time' => [
                'required',
            ],
            'date' => [
                'required',

            ],
            'total_price' => [
                'required',
                'numeric',
            ],
            'paid_out' => [
                'required',
                'numeric',
            ],
            'client_id' => [
                'required',
            ],
            'equipment_quantity' => [
                'required',
            ],
            'equipments_id' => [
                'required',
            ],

        ];
    }

    public function messages()
    {
        return [


            //BlockId
            'block_id.required' => 'A quadra não foi informada.',

            //Time
            'time.required' => 'É necessario informar o tempo.',

            //Date
            'date.required' => 'É necessario informar a data.',

            //TotalPrice
            'total_price.required' => 'É necessario informar o Preço Total.',
            'total_price.numeric' => 'Não é possivel utilizar letras(Preço Total).',

            //PaidOut
            'paid_out.required' => 'Não foi informado se foi pago',
            'paid_out.numeric' => 'Não foi informado se foi pago.(1 para Pago,0 para NãoPago)',

            //ClientID
            'client_id.required' => 'É necessario informar o cliente.',

        ];
    }
}

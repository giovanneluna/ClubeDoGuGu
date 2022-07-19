<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsStoreRequest extends FormRequest
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
                'unique:clients,name',
            ],
            'email' => [
                'required',
            ],
            'cpf' => [
                'required',
            ],
            'telephone' => [
                'nullable',
            ],
            'age' => [
                'nullable',
            ],
            'address' => [
                'nullable',
            ],
        ];
    }
}
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
                'unique:clients,email'
            ],
            'cpf' => [
                'required',
                'unique:clients,cpf'
            ],
            'telephone' => [
                'required',
            ],
            'age' => [
                'required',
            ],
            'address' => [
                'required',
            ],
        ];
    }
}

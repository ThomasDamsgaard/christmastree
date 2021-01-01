<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => [
                'required',
                'regex:/^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/',
            ],
            'order' => 'required',
            'location' => 'required',
            'puller' => 'required',
            'supplier' => 'required',
            'reference' => 'required',
            'phone' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'date.regex' => 'Date must be in the following format: dd-mm-yyyy',
        ];
    }
}

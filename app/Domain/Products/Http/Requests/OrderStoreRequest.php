<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'notification_type' => ['required', 'string'],
            'customer_name' => ['required', 'string', 'min:2'],
            'customer_email' => ['required', 'email'],
            'customer_phone' => ['required', 'string'],
            'address' => ['required', 'string', 'min:2'],
            'products_ids' => ['required', 'array'],
            'products_quantities' => ['required', 'array'],
            'products_prices' => ['required', 'array'],
        ];
    }
}

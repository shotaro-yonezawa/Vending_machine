<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'company_id' => 'required | max:255',
            'product_name' => 'required | max:255',
            'price' => 'required | numeric | min:0 | max:9999',
            'stock' => 'required | numeric | min:0 | max:9999'
        ];
    }
}

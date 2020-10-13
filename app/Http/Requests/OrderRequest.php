<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'items' => 'required',
            'customer' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'country' => 'required',
            'airport' => 'required',
            'price' => 'required',
        ];
    }

    public function messages(){
        return[
            'adress.required' => 'Введите Ваш адрес',
            'city.required' => 'Введите Ваш город',
            'country.required' => 'Введите вашу страну',
            'airport.required' => 'Введите аэропорт доставки',
        ];}
}

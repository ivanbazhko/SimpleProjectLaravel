<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaneRequest extends FormRequest
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
            'name' => 'required',
            'manufacture' => 'required',
            'image' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'fuselage' => 'required',
            'range' => 'required',
            'description' => 'required',
            'bigdesc' => 'required',
            'begin' => 'required',
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Введите название самолёта',
            'manufacture.required' => 'Введите производителя',
            'image.required' => 'Укажите URL изображения',
            'price.required' => 'Введите цену',
            'capacity.required' => 'Введите вместимость',
            'fuselage.required' => 'Введите размер фюзеляжа',
            'range.required' => 'Введите дальность полёта',
            'description.required' => 'Введите краткое описание',
            'bigdesc.required' => 'Введите описание',
            'begin.required' => 'Введите дату начала производства',
        ];}
}

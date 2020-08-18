<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required|max:30',
            'message' => 'required|min:10|max:1000',
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Введите Ваше имя',
            'email.required' => 'Введите Ваш E-mail',
            'email.email' => 'Введите верный адрес E-mail',
            'subject.required' => 'Введите тему сообщения',
            'subject.max' => 'Тема сообщения слишком длинная (макс. 30 символов)',
            'message.required' => 'Введите Ваше сообщение',
            'message.min' => 'Сообщение слишком короткое (мин. 15 символов)',
            'message.max' => 'Сообщение слишком длинное (макс. 1000 символов)',
        ];
    }
}

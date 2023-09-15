<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\RegisterController;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'     => 'required|alpha|max:255|unique:users',
            'username' => 'required|min:3|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя обязательное',
            'username.required' => 'Поле имя обязательное',
            'email.required' => 'Поле имя обязательное',
            'password.required' => 'Поле имя обязательное',
            'username.unique' => 'Пользователь с таким никнеймом уже есть',
        ];
    }
}

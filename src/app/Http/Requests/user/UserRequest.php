<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'mail_address' => 'email',
            'password' => 'required',
        ];
    }
    public function messages(){
        return [
            'mail_address.email'=>'メールアドレスが不正です',
            'password.required'=>'必須項目です',
        ];
    }
}

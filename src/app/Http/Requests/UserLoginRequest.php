<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'mail_address' => 'required|exists:users,mail_address',
            'password' => 'required',
        ];
    }
    public function messages(){
        return [
            'mail_address.required'=>'メールアドレスは必須項目です',
            'mail_address.exists'=>'このメールアドレスは登録されていません',
            'password.required'=>'パスワードは必須項目です',
        ];
    }
}

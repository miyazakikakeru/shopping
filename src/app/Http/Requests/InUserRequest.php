<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InUserRequest extends FormRequest
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
            'name' => 'required',
            'mail_address' => 'required|unique:users,mail_address',
            'password' => 'repuired', 
        ];
    }
    public function messages(){
        return [
            'name.required'=>'名前は必須項目です',
            'mail_address.required'=>'メールアドレスは必須項目です',
            'mail_address.unique'=>'このメールアドレスは既に使われています',
            'password.required'=>'パスワードは必須項目です',
        ];
    }
}

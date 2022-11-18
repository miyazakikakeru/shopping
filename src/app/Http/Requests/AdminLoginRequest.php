<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'id' => 'required|exists:admin,id',
            'password' => 'required',
        ];
    }
    public function messages(){
        return [
            'id.required'=>'管理者IDは必須項目です',
            'id.exists'=>'この管理者IDは存在しません',
            'password.required'=>'パスワードは必須項目です',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InAdminRequest extends FormRequest
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
    public function rules()
    {
        return [
            'id' => 'required|numeric|unique:admin,id',
            'password' => 'required',
            'name' => 'required',
        ];
    }
    public function messages(){
        return [
            'id.required'=>'管理者IDは必須項目です',
            'id.numeric'=>'管理者IDは半角数字で入力してください',
            'id.unique'=>'この管理者IDは既に使われています',
            'password.required'=>'パスワードは必須項目です',
            'name.required'=>'名前は必須項目です',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DelAdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'=>'required|exists:admin,id|numeric',
        ];
    }
    public function messages(){
        return [
            'id.required'=>'管理者IDは必須項目です',
            'id.numeric'=>'管理者IDは半角数字で入力してください',
            'id.exists'=>'この管理者IDは存在しません',
        ];
    }
}

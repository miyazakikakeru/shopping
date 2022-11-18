<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DelProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'deleteId'=>'required|exists:product,id',
            'deleteName'=>'required|exists:product,name',

        ];
    }
    public function messages(){
        return [
            'deleteid.exists' => 'この商品IDは既に使用されています',
            'deleteId.required' => '必須項目です',
            'deleteName.required|exists:product,name' => '商品名は必須項目です',
        ];
    }
}

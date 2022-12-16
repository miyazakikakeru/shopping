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
            'deleteId'=>'required|numeric|exists:product,id',
            'deleteName'=>'required|exists:product,name',

        ];
    }
    public function messages(){
        return [
            'deleteId.required' => '商品IDは必須項目です',
            'deleteId.numeric' => '商品IDは半角数字で入力してください',
            'deleteId.exists' => 'この商品IDの商品は登録されていません',
            'deleteName.exists' => 'この商品名の商品は登録されていません',      
            'deleteName.required' => '商品名は必須項目です',
        ];
    }
}

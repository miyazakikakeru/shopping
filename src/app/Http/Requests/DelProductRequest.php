<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DelProductRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
            'deleteId'=>'exists:product,id',
        ];
    }
    public function messages(){
        return [
            'id.exists'=>'この商品IDは既に使用されています',
        ];
    }
}

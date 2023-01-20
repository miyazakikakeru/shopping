<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InProductRequest extends FormRequest
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
            'id' => 'required|numeric|unique:product,id',
            'name' => 'required',
            'price' => 'required|numeric',
            'explanation' => 'required',
            'gender' => 'required',
            'condition' => 'required',
        ];
    }
    public function messages(){
        return [
            
            'id.required'=>'IDは必須項目です',
            'id.numeric'=>'IDは半角数字で入力してください',
            'id.unique'=>'このIDは既に使われています',
            'name.required'=>'名前は必須項目です',
            'price.required'=>'価格は必須項目です',
            'price.numeric'=>'価格は数値で入力してください',
            'explanation.required'=>'商品説明は必須項目です',
            'gender.required'=>'性別はどちらか選択してください',
            'condition.required'=>'商品状態はどちらか選択してください',
        ];
    }
}

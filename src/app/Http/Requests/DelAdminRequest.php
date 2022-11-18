<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DelAdminRequest extends FormRequest
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
            'id'=>'required|exists:admin,id',
        ];
    }
    public function messages(){
        return [
            'id.exists'=>'この管理者IDは既に使用されています',
            'id.required'=>'管理者IDは必須項目です',
        ];
    }
}

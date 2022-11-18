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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' => 'required|unique:admin,id',
            'password' => 'required',
            'name' => 'required',
        ];
    }
    public function messages(){
        return [
            'id.required'=>'IDは必須項目です',
            'id.unique'=>'このIDは既に使われています',
            'password.required'=>'パスワードは必須項目です',
            'name.required'=>'名前は必須項目です',
        ];
    }
}

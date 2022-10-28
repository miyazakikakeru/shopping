<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConrtactRequest extends FormRequest
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
            'name' => ['required'],
            'name_kana' => [],
            'mail' => ['confirmed','required','email'],
            'mail_confirmation' => ['required'],
            'banngou' => [],
            'naiyou' => ['required'],
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            
            'name.required' => '氏名は必須入力です',
            'mail.required' => 'メールアドレスは必須入力です',
            'mail.confirmed' => 'メールアドレス確認用が入力されていません',
            'mail.email' => 'メールアドレスが不正です',
            'mail_confirmation.required' => 'メール確認用は必須入力です',
            'naiyou.required' => '内容は必須入力です',
            
        ];
    }
}


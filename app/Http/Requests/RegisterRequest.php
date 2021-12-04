<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'register')
        {
            return true;
        }else{
            return false;
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mail' => 'email',
            'password' => 'required|alpha_dash|min:8|confirmed',
            'password_confirmation' => 'required|alpha_dash|min:8',
        ];
    }

    public function messages()
    {
        return[
            'mail.email' => 'メールアドレスの形式で入力して下さい。',
            'password.required' => 'パスワードを入力して下さい。',
            'password.alpha_dash' => 'パスワードは半角英数字で入力して下さい。',
            'password.min' => 'パスワードは8文字以上で入力して下さい。',
            'password.confirmed' => 'パスワードとパスワード(確認用)が一致していません。',
            'password_confirmation.required' => 'パスワード(確認用)を入力して下さい。',
            'password_confirmation.alpha_dash' => 'パスワード(確認用)は半角英数字で入力して下さい。',
            'password_confirmation.min' => 'パスワード(確認用)は8文字以上で入力して下さい。',
        ];
    }
}

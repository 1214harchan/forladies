<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'login')
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
            'id' => 'required',
            'password' => 'required|alpha_dash|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return[
            'id.required' => 'ユーザーIDを入力して下さい。',
            'password.required' => 'パスワードを入力して下さい。',
            'password.alpha_dash' => 'パスワードは半角英数字で入力して下さい。',
            'password.min' => 'パスワードは8文字以上で入力して下さい。',
        ];
    }
}

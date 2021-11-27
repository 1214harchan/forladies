<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('forladies.login');
    }

    public function mypage(Request $request)
    {
        $validate_rule = [
            'id' => 'integer',
            'password' => 'required|alpha_dash|min:8',
        ];
        $this->validate($request, $validate_rule);
        return view('forladies.mypage');
    }
}

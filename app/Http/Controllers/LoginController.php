<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('forladies.login');
    }

    public function mypage(LoginRequest $request)
    {
        return view('forladies.mypage');
    }
}

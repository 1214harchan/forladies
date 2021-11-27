<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register()
    {
        return view('forladies.register');
    }

    public function newuser(Request $request){
        $validate_rule = [
            'mail' => 'email',
            'password' => 'required|alpha_dash|min:8|confirmed',
            'password_confirmation' => 'required|alpha_dash|min:8',
        ];
        $this->validate($request, $validate_rule);
        return view('forladies.newuser');
    }
}

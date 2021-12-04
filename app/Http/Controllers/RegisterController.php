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

    public function newuser(RegisterRequest $request){        
        return view('forladies.newuser');
    }
}

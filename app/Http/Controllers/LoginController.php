<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function show()
    {
        return view('forladies.login');
    }

    public function store(LoginRequest $request)
    {
        return redirect('login');
    }
}
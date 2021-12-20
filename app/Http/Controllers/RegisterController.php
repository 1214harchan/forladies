<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('forladies.register');
    }

    public function store(Request $request){ 
        $this->validate($request, User::$rules);
        $users = new User;
        $form = $request->all();
        unset($form['_token']);
        $users->fill($form)->save();
        $id = $users->id; 
        return view('forladies.newuser',['id' => $id]);
    }
}
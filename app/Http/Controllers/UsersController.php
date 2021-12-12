<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function show(Request $request){
        $items = User::all();
        return view('forladies.members', ['items' => $items]);
    }
}

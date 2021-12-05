<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForladiesController extends Controller
{
    public function show()
    {
        return view('forladies.index');
    
    }
}

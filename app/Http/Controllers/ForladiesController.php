<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForladiesController extends Controller
{
    public function top()
    {
        return view('forladies.index');
    }
}

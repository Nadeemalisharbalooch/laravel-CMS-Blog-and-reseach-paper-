<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class posts extends Controller
{
    public function java(){
        return view('auth.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commnentcontroller extends Controller
{
    public function comment($id){
        return $id->all();

    }
}

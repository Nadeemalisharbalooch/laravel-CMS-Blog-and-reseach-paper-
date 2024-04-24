<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\tag;
use Illuminate\Http\Request;

class tagcontroller extends Controller
{
public function index(){
    $tag=tag::all();
    return view('auth.tags.index')->with('tag',$tag);

}
}

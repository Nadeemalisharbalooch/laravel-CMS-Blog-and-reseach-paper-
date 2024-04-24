<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
  public function index(){
    
    $category=category::all();
    return view('auth.category.index')->with('category',$category);
    
  }
}

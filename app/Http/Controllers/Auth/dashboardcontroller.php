<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use App\Models\tag;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
   
    public function dashboard(){
         $user=auth()->user()->is_admin;
        if($user===1){
        $postcount=post::count();
        $tagcount=tag::count();
        $categorycount=category::count();
        $usercount=User::count();
    
        return view('auth.dashboard')->with('postcount',$postcount)->with('tagcount',$tagcount)->with('categorycount',$categorycount)->with('usercount',$usercount);

        }
        else{
            return redirect()->route('newindex');
        }
        
    }
   
}
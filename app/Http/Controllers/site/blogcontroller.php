<?php
namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\post;
use App\Models\Reaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogcontroller extends Controller
{
 public function index(){
    $blog=post::all();
    return view('site.index')->with('blog',$blog);
    
 }
 public function openSingleBlog($id){

   if (Auth::check()) {
       $user_id = Auth::user()->id;

       $exists = Reaction::where('post_id', $id)
           ->where('user_id', $user_id)
           ->value('reaction');

       $blog = post::find($id);
       // $recentRecords = post::latest()->take(4)->get();
       // $comments = comment::where('post_id', $blog->id)->get();

      //  if (isset($exists)) {
      //      return "data has " . $exists;
      //  }

       return view('site/singlepost')->with('blog', $blog)->with('exists', $exists);
   }
   else {
       return redirect()->route('login');
   }
}

 public function contact()
 {
    return view('site.contact');

 }
 public function service()
 {
    return view('site.service');

 }
 public function loginuser()
 {
    return view('site.sign_in');
   
 }
 public function sign()
 {
    return view('site.sign_up');
   
 
 }  
}

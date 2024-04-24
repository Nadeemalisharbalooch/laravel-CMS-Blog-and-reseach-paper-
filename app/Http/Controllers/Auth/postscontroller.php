<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        DB::beginTransaction();
        try {
            $validatedData =$request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'tag' => 'required|string|max:255',
            ]);
    
            $user = post::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);
    
            $tag = Tag::create([
                'name' => $validatedData['tag'],
                'user_id' => $user->id,
            ]);
    
            if ($user && $tag) {
                DB::commit();
                return redirect()->route('users.index')->with('success', 'User and tag created successfully.');
            } else {
                DB::rollback();
                return redirect()->back()->with('danger', 'Something went wrong. Please try again.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('danger', 'Error: ' . $e->getMessage());
        }
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.posts.show');
    }
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
     
    // //   try{
        
    // //     DB::beginTransaction();
    //     $post= post::create([
    //         'user_id'=>auth()->id(),
    //         'title'=>$request->title,
    //         'description'=>$request->description,
    //         'status'=>$request->status,
    //         'category_id'=>$request->category
    //        ]);
           
    //     foreach($request->tags as $tag){
    //         $post->tags()->attach($tag);
    //         return "done";  
    //   } 
    
    //   DB::commit();
    //   $request->session()->flash('alert-success','Post create successfuly');
    // return "done";

    //     }
    //     catch(\Exception $ex){
    //         DB::rollBack();
    //         return back()->withErrors($ex->getMessage());
    //     }
            
        // }

        public function store(Request $request)
        {
            
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "show function";
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
    }
}

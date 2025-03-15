<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loginUserId=Auth::user()->id;
    $user=User::where('id','!=',$loginUserId)->get();
      return view('auth\posts\showuser')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        try {
            DB::beginTransaction();
    
            // Find the user by ID
            $user = User::find($id);
    
            if (!$user) { 
                abort(404, 'User not found.');
            }
            // Detach related records in post_tag table
            $user->posts()->detach(); // Assuming 'posts' is the relationship method for posts in User model
    
            // Delete the user
            $user->delete();
    
            DB::commit();
    
            return redirect()->back()->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('success', 'Error: ' . $e->getMessage());
        }
    }
    
}  
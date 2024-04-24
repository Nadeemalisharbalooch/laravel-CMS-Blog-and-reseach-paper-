<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog=post::all();
       
        return view('site.index1')->with('blog',$blog);
    }
    public function newindex()
    {
        // $blog=post::all();
        $blog = post::paginate(6); // Assuming you want 10 blog posts per page

        return view('site.blog')->with('blog',$blog);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authlogout()
    {
             auth::logout();
             return view('auth\login');
         
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
        //
    }
}
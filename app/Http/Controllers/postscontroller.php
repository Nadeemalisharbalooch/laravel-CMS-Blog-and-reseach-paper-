<?php

namespace App\Http\Controllers;

use App\Http\Requests\createrequest;
use Illuminate\Http\Request;

class postscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "im index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "im create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createrequest $request)
    {
        return $request;
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



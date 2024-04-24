<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\post;
use Illuminate\Http\Request;

class commnetscontroller extends Controller
{
 

  public function comment(Request $request, $id)
{
    $post = Post::findOrFail($id);

    // Validate the request data
    $request->validate([
        'comment' => 'required'
    ]);

    // Check if the user is authenticated
    if (auth()->check()) {
        // Find the post
        $post = Post::find($id);
        if (!$post) {
            // If the post does not exist, return an error message
            return back()->withErrors('Sorry, the post you are trying to comment on does not exist.');
        }
        // Create a new comment with the authenticated user's ID
        Comment::create([
            'post_id' => $post->id,
            'user_id' => auth()->id(),
            'comment' =>$request->input('comment')

        ]);
        // Redirect back to the post
        return redirect()->back()->with('success', 'comments added successfully,it will be visuble after admin approval');
    } else {
        // If the user is not authenticated, return an error message
        return back()->withErrors('Sorry, you must be logged in to comment.');
    }
}

    
}

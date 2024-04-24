<?php

namespace App\Http\Controllers;
use App\Models\reaction ;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function like(int $id)
    {
        
        $user_id = auth()->id();
        $existingReaction = Reaction::where('user_id', $user_id)->where('post_id', $id)->first();
    
        if ($existingReaction) {
            if ($existingReaction->reaction == 1) {
                $existingReaction->update(['reaction' => 3]);
                // return "You unliked the post.";
                return back();
            } else {
                $existingReaction->update(['reaction' => 1]);
                // return "You liked the post.";
                return back();
            }
        } else {
            $blog = Reaction::create([
                'user_id' => $user_id,
                'post_id' => $id,
                'reaction' => 1,
            ]);
            // return "Liked successfully.";
            return back();
        }
    }

    public function dislike(int $id)
    {
        $user_id = auth()->id();
        $existingReaction = Reaction::where('user_id', $user_id)->where('post_id', $id)->first();
    
        if ($existingReaction) {
            if ($existingReaction->reaction == 0) {
                $existingReaction->update(['reaction' => 3]);
                // return "You unliked the post.";
                return back();
                
            } else {
                $existingReaction->update(['reaction' => 0]);
                // return "You liked the post.";
                return back();
            }
        } else {
            $blog = Reaction::create([
                'user_id' => $user_id,
                'post_id' => $id,
                'reaction' => 0,
            ]);
            // return "Liked successfully.";
            return back();
        }
    }

    public function showallreaction(){
     $reactions = Reaction::whereIn('reaction', [0, 1])->with('post', 'user')->get();

     return view('auth\posts\showallreaction')->with('reactions',$reactions);
    }
        
}


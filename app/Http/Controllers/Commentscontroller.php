<?php
namespace App\Http\Controllers;
use App\Models\comment;
use App\Models\post;
use Illuminate\Http\Request;

class Commentscontroller extends Controller
{
        public function indexshow(Request $request, $id)
        {
          
        // Find the post
        $post = Post::findOrFail($id);
  
        // Validate the request data
        $request->validate([
            'comment' => 'required'
        ]);
       
        // Check if the user is authenticated
        if (auth()->check()) {
            // Create a new comment with the authenticated user's ID
            Comment::create([
                'post_id' => $post->id,
                'user_id' => auth()->id(),
                'comment' => $request->input('comment')
            ]);
            // Redirect back to the post
            return redirect()->back()->with('success', 'Comment added successfully. It will be visible after admin approval.');
        } else {
            // If the user is not authenticated, return an error message
            return back()->withErrors('Sorry, you must be logged in to comment.');

        }
    }
    public function show123(int $postId)
    {
        $post = Post::with('tags')->find($postId);
        $tagNames;
        
        foreach ($post->tags as $tag) {
            $tagNames = $tag->name;
        }
        
        return $tagNames;
        

        

      return  $post=post::find($postId);
      return $post;
       $comment=$post->comments;
       foreach($comment as $commente){
        echo $commente->comment."<br>";
       } 
       return;

        $post = Post::with('comments')->with('category')->find($postId);
        return view('site.commentwithpost', ['post' => $post]);
    }
    public function showAllComments()
    {
        $comments = Comment::with('post', 'user')->get();


        
        // foreach ($posts as $post) {
        //     echo "Post: " . $post->description . "<br>";
        //     echo "Commentss:<br>";
        //     foreach ($post->commentss as $comments) {
        //         echo "- " . $comments->comments . "<br>";
        //     }
        //     echo "<br>";
        // }

       return view('auth\posts\showallcomment')->with('comments',$comments);
        }

    
}

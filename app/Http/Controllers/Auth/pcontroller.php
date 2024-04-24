<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\gallery;
use App\Models\post;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class pcontroller extends Controller
{
  
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=post::all();
       return view('auth.posts.show')->with('posts',$post);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=category::all();
        $tags=tag::all();
        
        return view('auth.posts.create')->with('categories',$categories)->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // try{
        
        //        DB::beginTransaction();
        if($file=$request->file('file')){
          $filename=rand(100,1000).time().$file->getClientOriginalName();
          $filpath=public_path('/storage/auth/posts');
          $filwithpath=$filpath.$filename;
          $file->move($filpath,$filename);
          
        }
                    $post= post::create([
                    // 'gallery_id'=>$gallery->id,
                    'image'=>$filename,
                    'user_id'=>auth()->id(),
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'status'=>$request->status,
                    'category_id'=>$request->category
                   ]);
                 
                foreach($request->tags as $tag){
                    $post->tags()->attach($tag);
                    // $request->session()->flash('alert-success','Post create successfuly');  
              } 
              return redirect()->back()->with('success', 'Data Save successfully.');
            
        //       DB::commit();
        //       $request->session()->flash('alert-success','Post create successfuly');
        //     return "done";
          
        //         }
        //         catch(\Exception $ex){
        //             DB::rollBack();
        //             return back()->withErrors($ex->getMessage());
        //         }
                    
                }

    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=post::find($id);
        $category=category::find($id);
        $tag=tag::find($id);
        $image=gallery::all();
        return view('auth.posts.view')->with('post',$post)->with('category',$category)->with('tag',$tag)->with('image',$image);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
        $post=post::find($id);
        $categories=category::all();
        $tags=tag::all();
        $gallery=gallery::all();
        return view('auth.posts.edit')->with('categories',$categories)->with('tags',$tags)->with('posts',$post)->with('gallery',$gallery);

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        // Check if a new image file is uploaded in the request.
        if ($request->hasFile('file')) {
            // Handle the image update logic here.
            $file = $request->file('file');
            // Perform any necessary operations like deleting the old image and saving the new one.
            $filename = $this->uploadfile($file);
        
            // Update the post with the new image name.
            $post->update([
                'image' => $filename,
                'user_id' => auth()->id(),
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'category_id' => $request->category
            ]);
        } else {
            // If no new image is provided, update the post without changing the image.
            $post->update([
                'user_id' => auth()->id(),
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'category_id' => $request->category
            ]);
        }
    
        // Handle updating tags and other fields as needed.
        
        return redirect()->back()->with('success', 'Data saved successfully.');
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $post = Post::find($id);
      if (!$post) {
        abort(404);
      }
      $post->tags()->detach();
      $post->delete();
      return redirect()->back()->with('success', 'Post deleted successfully.');
    }
    private function uploadfile($file){
      $filename=rand(100,1000).time().$file->getClientOriginalName();
         
      $filpath=public_path('/storage/auth/posts');
      $filwithpath=$filpath.$filename;
      $file->move($filpath,$filename);

    return $filename;
  
    }
    private function storeimage($filename){
      $gallery=post::create([
        'image'=>$filename,
       
      ]);
      return $gallery;
    }
}





  
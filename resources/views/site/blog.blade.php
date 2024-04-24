@extends('layouts.main')
@section('style')
<!-- empty file style -->
@endsection
@section('title')
 All Posts
@endsection
@section('content')
<style></style>
<div id="projectContainer">
    @foreach($blog as $post)
    <!-- Project Card -->
    <div class="projectCard">
        <img src="{{ asset('storage/auth/posts/'.$post->image) }}" alt="Project Image">
        <div class="projectCardContent">
            <h2>{{ $post->title }}</h2>
            <p>{{ Str::limit($post->description, 50, '...') }}</p>
            <div class="postDetails">
                
                <span class="postTime">{{ $post->created_at->format('M d, Y') }}</span>
            </div>
            <form method="get" action="{{url('single', $post->id) }}">
                @csrf 
                <button type="submit" class="btn btn-solid-border btn-round-full more">More Read</button>
            </form>
        </div>
    </div>

    @endforeach
   
</div>
{{$blog->links('pagination::bootstrap-5')}}
@endsection  
@extends('layouts.main')
@section('style')
<!-- empty file style -->
@section('content')
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Single Post</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .post {
      margin-bottom: 20px;
    }
    .comment-section {
      margin-top: 20px;
    }
    .post img {
      width: 100%;
      height: auto;
    }
    .tags {
      margin-top: 10px;
    }
  
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="post">
      <img src="{{ asset('storage/auth/posts/'.$blog->image) }}" alt="Post Image" style="width: 200px; height: auto;" class="img-fluid">


        <h2>{{ $blog->title }}</h2>
        <p><small>{{ $blog->created_at->format('M d, Y') }}</small></p>
        <p>{{$blog->description}}</p>
        <div class="tags">
        <strong>Tags:</strong>
        @foreach($blog->tags as $tag)
         <span class="badge badge-primary">{{ $tag->name }}</span> 
    @endforeach
          
        </div>
        <hr>
        <div class="btn-toolbar">
        <form action="{{ url('like', $blog->id) }}" method="post" class="mr-2">
    @csrf
    <button type="submit" class="btn btn-outline-primary btn-like" style="{{ $exists == 1 ? 'background-color: #3490dc; color: #fff;' : '' }}">
        <i class="fa fa-thumbs-up"></i> Like
    </button>
</form>  

<form action="{{ url('dislike', $blog->id) }}" method="post">
    @csrf
    <button type="submit" class="btn btn-outline-danger btn-dislike" style="{{ $exists == 0 ? 'background-color: #dc3545; color: #fff;' : '' }}">
        <i class="fa fa-thumbs-down"></i> Dislike  
    </button>
</form>

        </div>
			
        <h4>Comments</h4>
        <div class="comments"></div>
        <form method="post" action="{{url('commentssee', $blog->id) }}">
    @csrf
    <div class="form-group">
        <input type="text"  class="form-control comment-input" placeholder="Write a comment..." name="comment">
    </div>
    <button type="submit" class="btn btn-primary btn-submit-comment">Submit</button>
   </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection



@extends('layouts.site')
@section('style')
<!-- empty file style -->
@section('content')
<style>
    body {
        margin: 0; /* Reset body margin */
    }

    #projectContainer {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .projectCard {
        background-color: #fff;
        border-radius: 8px;
        padding: 2%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
        width: calc(100% - 20px); /* Full width minus the gap */
        margin-bottom: 20px; /* Add some bottom margin */
    }

    .projectCard:hover {
        transform: scale(1.05);
    }

    .projectCard img {
        width: 100%;
        max-height: 200px; /* Set a maximum height */
        border-radius: 8px 8px 0 0;
        display: block; /* Remove any potential spacing caused by inline-block */
        margin: 0; /* Reset margin to remove any default spacing */
    }

    .projectCardContent {
        padding: 20px; /* Add padding for text content */
    }

    .button-style {
        background-color: red;
        margin: 0;
    }

    @media (min-width: 768px) {
        .projectCard {
            width: calc(50% - 20px); /* Two cards per row */
        }
    }

    @media (min-width: 992px) {
        .projectCard {
            width: calc(33.333% - 20px); /* Three cards per row */
        }
    }
</style>


<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Ours blog</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="projectContainer">
    @foreach($blog as $blog)
    <!-- Project Card -->
    <div class="projectCard">
        <img src="{{ asset('storage/auth/posts/'.$blog->image) }}" alt="Project Image">
        <div class="projectCardContent">
            <h2>{{ $blog->title }}</h2>
            <p>{{ Str::limit($blog->description, 50, '...') }}</p>
            <div class="postDetails">
                <span class="postTime">{{ $blog->created_at->format('M d, Y') }}</span>
            
            </div>
            <button class="btn btn-solid-border btn-round-full">More Read</button>
        </div>
    </div>
    @endforeach
</div>
@endsection 




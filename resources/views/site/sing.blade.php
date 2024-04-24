@extends('layouts.site')


@section('content')
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">News details</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@if($blog)
<section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12 mb-5">
						<div class="single-blog-item">
						<img loading="lazy" src="{{asset('storage/auth/posts/'.$blog->image)}}" alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-5">
								<div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
								<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>{{ date('d M', strtotime($blog->created_at)) }}
</span>
									<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
									
								</div>
								<h2 class="mt-3 mb-4">{{$blog->title}}</h2>
								<p class="lead mb-4">{{$blog->description}}</p>



							

								<div class="tag-option mt-5 d-block d-md-flex justify-content-between align-items-center">
									<ul class="list-inline">
										<li>Tags:</li>
                                        @foreach($blog->tags as $tag)
                                        <li class="list-inline-item"><a href="#" rel="tag">{{$tag->name}}</a></li>
                                        @endforeach
								</div>
							</div>
						</div>
					</div>
					@endif
					@if(session('success'))
     <script>
		alert("{{ session('success') }}")
	 </script>
        
    </div>
@endif
<div class="col-lg-12 mb-5">
						
						<form method="post" action="{{url('comments',$blog->id)}}" >
							@csrf 
						<div class="form-group">
							<label for=""><strong>Comment</strong></label>
							<input type="textarea" name="comment" cols="20" rows="3" class="form-control" placeholder="Enter commnet here.">
							<button type="submit" class="btn btn-info btn-sm mt-3" style="float: right;">Send</button>
						</div>
						</form>
						</div>
					<div class="col-lg-12 mb-5">
						<div class="comment-area card border-0 p-5">
							<h4 class="mb-4">2 Comments</h4>
							<ul class="comment-tree list-unstyled">
								<li class="mb-5">
									<div class="comment-area-box">
										<img loading="lazy" alt="comment-author" src="images/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2">

										<h5 class="mb-1">Philip W</h5>
										<span>United Kingdom</span>

										<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
											<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
											<span class="date-comm">Posted October 7, 2018 </span>
										</div>

										<div class="comment-content mt-3">
											<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a
												company that provides consultants on an agency basis. </p>
										</div>
									</div>
								</li>

								<li>
									<div class="comment-area-box">
										<img loading="lazy" alt="comment-author" src="images/blog/test2.jpg" class="mt-2 img-fluid float-left mr-3">

										<h5 class="mb-1">Philip W</h5>
										<span>United Kingdom</span>

										<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
											<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
											<span class="date-comm">Posted October 7, 2018</span>
										</div>

										<div class="comment-content mt-3">
											<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a
												company that provides consultants on an agency basis. </p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-12">
					
					</div>
				</div>
			</div>

			<div class="col-lg-4 mt-5 mt-lg-0">
				<div class="sidebar-wrap">
					


					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
						<h5>Latest three Posts</h5>
              @foreach($recentRecords as $recentRecord)
						<div class="media border-bottom py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="{{asset('storage/auth/posts/'.$recentRecord->image)}}" style="width: 100px;" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">{{$recentRecord->title}}</a></h6>
								<span class="text-sm text-muted">{{ date('d M', strtotime($blog->created_at)) }}</span>
							</div>
						</div>
						@endforeach
				</div>
			</div>
		</div>
	</div>
</section>


@endsection



@extends('layouts.auth')

@section('title','posts')

@section('style')
@endsection
@section('content')

<div class="content-wrapper">
<div class="content">
  <div class="card card-default">
    <div class="card-header">
      <h2>Create Post</h2>
      <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-musk" role="button" aria-expanded="false" aria-controls="collapse-input-musk"></a>
    </div>
    <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form method="POST"  action="{{route('update', $posts->id)}}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <label>Title</label>
          <input type="text" value="{{old('title',$posts->title)}}" name="title" class="form-control" placeholder="title">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="description"  value="{{old('description',$posts->description)}}" name="description" class="form-control" cols="30" rows="6" style="resize:none" placeholder="title" value="">
        </div>
        <div class="form-group">
  <label>is Publish</label>
  <select name="status" class="form-control">
    <option value="" disabled {{ $posts->status == null ? 'selected' : '' }}>select option</option>
    <option value="1" {{ $posts->status == 1 ? 'selected' : '' }}>Publish</option>
    <option value="0" {{ $posts->status == 0 ? 'selected' : '' }}>Unpublish</option>
  </select>
</div>

        <div class="form-group">
          <label>category</label>
          <select name="category" class="form-control selectpicke">
            <option value="" disabled selected>select option</option> 
            @if(count($categories) > 0) 
            @foreach($categories as $category) 
    <option value="{{ $category->id }}" {{ $posts->category_id == $category->id ? 'selected' : '' }}>
      {{ $category->name }}
    </option>


             @endforeach @endif
          </select>
        </div>
        <div class="form-group">
  <label>Tags</label>
  <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
    <option value="" disabled selected>select option</option> 
    @if(count($tags) > 0) 
      @foreach($tags as $tag) 
        <option value="{{ $tag->id }}" {{ in_array($tag->id,$posts->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
          {{ $tag->name }}
        </option>
      @endforeach
    @endif
  </select>
  <div class="form-group mb-5">
            <label>Image</label>
            <input type="file" value="{{$posts->image}}"name="file" class="form-control">
          </div>
          
</div>

  </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @csrf
   


  <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-select-multiple" role="button"
    aria-expanded="false" aria-controls="collapse-select-multiple"> </a>
</div>
 
</div>
</div>

</div>
        
      </div>
    @endsection
    @section('script')
                  <script src="{{asset('auth/plugins/jquery/jquery.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/simplebar/simplebar.min.js')}}"></script>
                  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
                  <script src="{{asset('auth/plugins/prism/prism.js')}}"></script>
                  <script src="{{asset('auth/plugins/select2/js/select2.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
                  <script src="{{asset('auth/js/mono.js')}}"></script>
                  <script src="{{asset('auth/js/chart.js')}}"></script>
                  <script src="{{asset('auth/js/map.js')}}"></script>
                  <script src="{{asset('auth/js/custom.js')}}"></script>
                      
    @endsection
  

    
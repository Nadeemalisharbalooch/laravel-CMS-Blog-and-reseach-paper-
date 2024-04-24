


@extends('layouts.auth')

@section('title','posts')

@section('style')
<h1>welcome</h1>
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
      <form method="get" action="{{url('update',$posts->id)}}">
        <div class="form-group">
          <label>Title</label>
          <input type="text" value="{{$posts->title}}" name="title" class="form-control" placeholder="title">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="description" name="description" class="form-control" cols="30" rows="6" style="resize:none" placeholder="{{$posts->description}}">
        </div>
        <div class="form-group">
          <label>is Publish</label>
          <select name="status" class="form-control">
            <option value="" disabled selected>select option</option>
            <option  @selected($posts->status)==1 value="1">Publish</option>
            <option @selected($posts->status)==0 value="0">Draft</option>
          </select>
        </div>
        <div class="form-group">
          <label>category</label>
          <select name="category" class="form-control selectpicke">
            <option value="" disabled selected>select option</option> 
            @if(count($categories) > 0) 
            @foreach($categories as $category) 
            <option value="{{ $category->id }}" {{ $posts->id == $category->id ? 'selected' : '' }}>
  {{ $category->name }}
</option>

             @endforeach
              @endif
          </select>
        </div>
        <div class="form-group">
          <label>Tags</label>
           @if(count($tags) > 0)
            @foreach($tags as $tag)
             <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="tags[]" value="{{$tag->id}}">
            <label class="form-check-label">{{$tag->name}}</label>
          </div> @endforeach @endif </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @csrf
    </div>
  </div>
</div>
</div> 
  
    @endsection
    @section('script')
          <script src="js/mono.js"></script>
          <script src="js/chart.js"></script>
          <script src="js/map.js"></script>
          <script src="js/custom.js"></script>
         
    @endsection

  @extends('layouts.auth')

  @section('title','posts')
  @section('content')
 
  <div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
        <h2>Create Post</h2>
      </div>
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif 
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Title</label>
            <input type="text" value="{{old('title')}}" name="title" class="form-control" placeholder="Title">
          </div>
          <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description">
          </div>
          <div class="form-group">
            <label>Is Publish</label>
            <select name="status" class="form-control">
              <option type="hidden" value="" disabled selected>Select option</option>
              <option value="1">Publish</option>
              <option value="0">Draft</option>
            </select>
          </div>
          <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control selectpicker">
              <option value="" disabled selected>Select option</option>
              @if(count($categories) > 0)
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              @endif
            </select>
          </div> 
          <div class="form-group">
            <label>Tags</label>
            <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
              <option value="" disabled selected>Select option</option> 
              @if(count($tags) > 0) 
                @foreach($tags as $tag) 
                  <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
              @endif
            </select>
          </div>
          <div class="form-group mb-5">
            <label>Image</label>
            <input type="file" value="{{old('file')}}" name="file" class="form-control">
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
   @endsection
    
      

    
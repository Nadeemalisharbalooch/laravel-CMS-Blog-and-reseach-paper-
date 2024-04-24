
@extends('layouts.auth')

@section('title','posts')
@section('content')

<div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
        <h2>Edit Research paper</h2>

      </div>
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif 
        <form method="POST" action="{{ route('update_reseach_paper',$Reseach->id) }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
          <div class="form-group">
    <label>Title</label>
    <input type="text" value="{{ old('title', $Reseach->title) }}" name="title" class="form-control" placeholder="Enter Title">
</div>

          <div class="form-group">
            <label>Abstract</label> 
            <input type="text" value="{{ old('title', $Reseach->abstract) }}" name="abstract" class="form-control" placeholder="Enter Abstract">
          </div>
          <label>Is Publish</label>
<select name="status" class="form-control">
    <option value="" disabled>Select option</option>
    <option value="1" {{ $Reseach->is_Publish == 1 ? 'selected' : '' }}>Publish</option>
    <option value="0" {{ $Reseach->is_Publish == 0 ? 'selected' : '' }}>Draft</option>
</select>


          </div>
          <div class="form-group">
            <label>Authors</label>
            <input type="text" value="{{old('Authors', $Reseach->author_name)}}" name="author" class="form-control" placeholder="Enter Author">
          </div>
          <div class="form-group mb-5">
            <label>Pdf file</label>
            <input type="file" name="file" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-select-multiple" role="button" aria-expanded="false" aria-controls="collapse-select-multiple"></a>
      </div>
    </div>
  </div>
</div>
    @endsection
    

  
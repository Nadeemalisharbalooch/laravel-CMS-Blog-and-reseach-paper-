
@extends('layouts.auth')

@section('title','posts')
@section('content')

<div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
        <h2>Create Research paper</h2>

      </div>
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif 
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{ route('reseach_paper_store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Title</label>
            <input type="text" value="{{old('title')}}" name="title" class="form-control" placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label>Abstract</label>
            <input type="text" name="abstract" class="form-control" placeholder="Enter Abstract">
          </div>
          <div class="form-group">
            <label>Is Publish</label>
            <select name="status" class="form-control">
              <option value="" disabled selected>Select option</option>
              <option value="1">Publish</option>
              <option value="0">Draft</option>
            </select>
          </div>
          <div class="form-group">
            <label>Authors</label>
            <input type="text" value="{{old('Authors')}}" name="author" class="form-control" placeholder="Enter Author">
          </div>
          <div class="form-group mb-5">
            <label>Pdf file</label>
            <input type="file" name="file" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-select-multiple" role="button" aria-expanded="false" aria-controls="collapse-select-multiple"></a>
      </div>
    </div>
  </div>
</div>
         
@endsection
    

  
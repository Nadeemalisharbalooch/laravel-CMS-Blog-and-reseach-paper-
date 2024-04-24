@extends('layouts.auth')

@section('title','Tags')

@section('style')
<link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
<
@endsection
@section('content')
<div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
        <h2>Tags</h2>
  
      </div>
      <div class="card-body">
        @if(($tag) )
        <table class="table">
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($tag as $tag)
      <th scope="row">{{$tag->id}}</th>
      <td>{{$tag->name}}</td>
     
    </tr>
   @endforeach
  </tbody>
</table>
          @else
          <h1 class="text-center alert-danger">No post found</h1>
          @endif
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
          <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
          <script>
  $(document).ready(function(){
    $('#post').dataTable({
      "lengthChange": false
    });
  });
</script>

    @endsection







  
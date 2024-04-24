@extends('layouts.auth')

@section('title','category')

@section('style')
<link href="{{asset('auth/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />

<style>
    .outer{
      text-align: center;
    }
    .inner{
      display: inline-block;
    }
    </style>
@endsection
@section('content')

<div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
       <button class="bg bg-primary text-white btn btn-solid-border btn-round-full ">Add New</button>

      </div>
      <div class="card-body">
        @if(($category) )
        <table class="table">
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">tag name</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($category as $category)
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td class="outer">
                  <a href="" class="btn btn-info btn-sm inner">Edit</a>
                <form action="" method="get" class="inner">
                <button type="submit"><a  class="btn btn-danger btn-sm ">Del</a></button>
                </form>           
                  </td>
     
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
         
          <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
          <script>
  $(document).ready(function(){
    $('#post').dataTable({
      "lengthChange": false
    });
  });
</script>

    @endsection







  
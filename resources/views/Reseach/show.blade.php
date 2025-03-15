@extends('layouts.auth')

@section('title','posts')

@section('style')
<link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
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
      @if(session('success'))
  <div class="alert alert-danger">
      {{ session('success') }}
  </div>
@endif

      </div>
      <div class="card-body">
        @if(count($Reseach) > 0)
        <div class="table-responsive">
          <table class="table" id="post">
            <thead class="thead-dark text-center">
              <tr>
              
                <th scope="col">Title</th>
                <th scope="col">abstract</th>
                <th scope="col">author_name</th>
                <th scope="col">status</th>
                <th scope="col">created_at</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Reseach as $post)
              <tr>
             
                <td>{{$post->title}}</td>
                <td>{{Str::limit($post->abstract,3,'...')}}</td>
                <td>{{$post->author_name}}</td>
                <td>{{$post->is_Publish==1 ?'Active':'InActive'}}</td>
                <td>{{$post->created_at->format('M d, Y')}}</td>
                <td class="outer">
                <a href="{{url('view_reseach_paper',$post->id)}}" class="btn btn-success btn-sm inner">view</a>
                <a href="{{url('edit_reseach_paper',$post->id)}}" class="btn btn-info btn-sm inner">Edit</a>
              <form action="{{url('destroy_reseach_paper',$post->id)}}" method="get" class="inner">
              <button type="submit"><a  class="btn btn-danger btn-sm ">Del</a></button>
              </form>           
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
        @else
        <h1 class="text-center alert-danger">No post found</h1>
        @endif
      </div>
    </div>
  </div>
</div>
    @endsection
  @section('script') 
  <script src="{{asset('auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
  <script>
      $(document).ready(function(){
          $('#post').dataTable({
              "lengthChange": false,
              "searching": true // Add this line to enable searching
          });
      });
  </script>
@endsection

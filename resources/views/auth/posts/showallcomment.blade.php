

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
        @if(count($comments) > 0)
        <div class="table-responsive">
          <table class="table" id="post">
            <thead class="thead-dark text-center">
            <tr>
                    <th>Post</th>
                    <th>Name</th>  
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->post->title }}</td>
                        <td>{{ $comment->user->name }}</td>
                        <td>{{ $comment->user->email }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ $comment->created_at }}</td>
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


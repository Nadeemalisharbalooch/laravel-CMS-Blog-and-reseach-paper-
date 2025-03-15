

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
        @if(count($reactions) > 0)
        <div class="table-responsive">
          <table class="table" id="post">
            <thead class="thead-dark text-center">
            <tr>
                    <th>Post Title</th>
                    <th>Name</th>  
                    <th>Username</th>
                    <th>Reaction</th>
                    <th>created_at</th>

                </tr>
            </thead>
            <tbody>
            @foreach($reactions as $reaction)
                    <tr>
                        <td>{{ $reaction->post->title }}</td>
                        <td>{{ $reaction->user->name }}</td>
                        <td>{{ $reaction->user->email }}</td>
                        <td>
    @if ($reaction->reaction == 1)
        Dislike 
    @elseif ($reaction->reaction == 0)
        Like 
    @endif
</td>

                        <td>{{ $reaction->created_at }}</td>
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


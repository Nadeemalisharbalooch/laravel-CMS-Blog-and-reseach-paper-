@extends('layouts.auth')

@section('title','posts')

@section('style')

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
  <div class="alert danger-success">
      {{ session('success') }}
  </div>
@endif

      </div>
      <div class="card-body">
        @if(count($user) > 0)
        <div class="table-responsive">
          <table class="table" id="post">
            <thead class="thead-dark text-center">
              <tr>
    
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $user)
              <tr>
              
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                
               
                <td class="outer">
                <a href="" class="btn btn-success btn-sm inner">Block</a>
              <form action="{{route('deleteuser',$user->id)}}" method="get" class="inner">
            
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

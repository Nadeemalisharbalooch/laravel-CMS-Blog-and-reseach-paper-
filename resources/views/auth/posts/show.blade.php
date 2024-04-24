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
          @if(count($posts) > 0)
          <div class="table-responsive">
            <table class="table" id="post">
              <thead class="thead-dark text-center">
                <tr>
                <th scope="col">image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">category</th>
                  <th scope="col">username</th>
                  <th scope="col">status</th>
                  <th scope="col">Operations</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
               
    <td><img src="{{ ('storage/auth/posts/').'/'.$post->image }}" width="60px" alt=""></td>

                  <td>{{$post->title}}</td>
                  <td>{{Str::limit($post->description,3,'...')}}</td>
                  <td>{{$post->category->name}}</td>
                  <td>{{$post->user->name}}</td>
                  <td>{{$post->status==1 ?'Active':'InActive'}}</td>
                  <td class="outer">
                  <a href="{{url('show',$post->id)}}" class="btn btn-success btn-sm inner">view</a>
                  <a href="{{url('edit',$post->id)}}" class="btn btn-info btn-sm inner">Edit</a>
                <form action="{{url('delete',$post->id)}}" method="get" class="inner">
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
    <script src="{{asset('site/js/mono.js')}}"></script>
    <script src="{{asset('site/js/chart.js')}}"></script>
    <script src="{{asset('site/js/map.js')}}"></script>
    <script src="{{asset('site/js/custom.js')}}"></script>
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



 







    
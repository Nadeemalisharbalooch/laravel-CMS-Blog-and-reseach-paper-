@extends('layouts.auth')

@section('title','view post')

@section('style')
<link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />

@endsection
@section('content')
<div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
   <h2>View post</h2>
      </div>
      <div class="card-body">
    
        <div class="table-responsive">
          <table class="table" id="post">
            <thead class=" text-center">
            <tr>
                <th scope="col">Posts Names</th>
                <th scope="col">Posts Items</th>
                
              </tr>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">{{$post->title}}</th>
                
              </tr>
              <tr>
                <th scope="col">description</th>
                <th scope="col">{{$post->description}}</th>
                
              </tr>
              <tr>
                <th scope="col">category</th>
                <th scope="col">{{$post->category->name}}</th>
                
              </tr>
             
             
              <tr>
                <th scope="col">UesrName </th>
                <th scope="col">{{$post->user->name}}</th>
                
              </tr>
              
              <tr>
                <th scope="col">status </th>
                <th scope="col">{{$post->status==1 ?'Publish':'unpublish'}}</th>
                
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
       
      </div>
    </div>
  </div>
</div>

    @endsection
  







  
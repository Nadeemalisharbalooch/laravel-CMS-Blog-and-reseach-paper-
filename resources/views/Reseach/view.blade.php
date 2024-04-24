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
                
              </tr>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">{{$Reseach->title}}</th>
                
              </tr>
             
              <tr>
                <th scope="col">author name</th>
                <th scope="col">{{$Reseach->author_name}}</th>
                
              </tr>
             
        
              
              <tr>
                <th scope="col">status </th>
                <th scope="col">{{$Reseach->is_Publish==1 ?'Publish':'unpublish'}}</th>
                
              </tr>
              <tr>
                <th scope="col">abstraction</th>
                <th scope="col">{{$Reseach->abstract}}</th>
                
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
  







  
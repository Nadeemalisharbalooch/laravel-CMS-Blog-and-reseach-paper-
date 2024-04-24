@extends('layouts.auth')


@section('content')
<!-- header copy here -->
  <!-- ====================================
      ——— CONTENT WRAPPER
      ===================================== -->
  <div class="content-wrapper">
    <div class="content">
      <!-- Top Statistics -->
      <div class="row">
        <div class="col-xl-3 col-sm-6">
          <div class="card card-default card-mini bg bg-primary" style="height: 140px;">
            <div class="card-header">
              <h2>{{$postcount}}</h2>
             
              <div class="sub-title">
                <span class="mr-1">Posts</span> 
                
            
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card card-default card-mini bg bg-info" style="height: 140px;">
            <div class="card-header">
              <h2>{{$tagcount}}</h2>
             
              <div class="sub-title">
                <span class="mr-1">Tags</span> 
                
             
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card card-default card-mini bg bg-success" style="height: 140px;">
            <div class="card-header">
              <h2>{{$categorycount}}</h2>
             
              <div class="sub-title">
                <span class="mr-1">categories</span> 
                
                
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card card-default card-mini bg bg-warning" style="height: 140px;">
            <div class="card-header">
              <h2>{{$usercount}}</h2>
             
              <div class="sub-title">
                <span class="mr-1">Users</span> 
                
                
              </div>
            </div>
          
          </div>
        </div>
      </div>

    </div>
    @endsection
    @section('script')
    
          <script>
            $(document).ready(function(){
          $('#logout-button').click(function(){
          $('#logout-form').submit();
          });
            });
          </script>
    @endsection
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="{{asset('auth/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
      <title>@yield('title')</title>
      <!-- theme meta -->
      <meta name="theme-name" content="" />
      <!-- GOOGLE FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
      <link href="{{asset('auth/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
      <link href="{{asset('auth/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
      <!-- java -->
      @yield('style')
      <!-- PLUGINS CSS STYLE -->
      <link href="{{asset('auth/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
      <link href="{{asset('auth/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
      <!-- MONO CSS -->
      <link id="main-css-href" rel="stylesheet" href="{{asset('auth/css/style.css')}}" />
      <!-- FAVICON -->
      <link href="{{asset('auth/images/favicon.png')}}" rel="shortcut icon" />
      <!--
         HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
         -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="{{asset('auth/plugins/nprogress/nprogress.js')}}"></script>
   </head>
   <body class="navbar-fixed sidebar-fixed" id="body">
      <script>
         NProgress.configure({ showSpinner: false });
         NProgress.start();
      </script>
      <!-- ====================================
         ——— WRAPPER
         ===================================== -->
      <div class="wrapper">
         <!-- ====================================
            ——— LEFT SIDEBAR WITH OUT FOOTER
            ===================================== -->
         <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
               <!-- Application Brand -->
               <div class="app-brand">
                  <a href="/index.html">
                  <img src="{{asset('site/images/favicon.png')}}" width="60" alt="">
                  <span class="brand-name">Admin Panel</span>
                  </a>
               </div>
               <!-- begin sidebar scrollbar -->
               <div class="sidebar-left" data-simplebar style="height: 100%;">
                  <!-- Sidebar menu -->
                  <ul class="nav sidebar-inner" id="sidebar-menu">
                     <li class="active">
                        <a class="sidenav-item-link" href="javascript:(0)">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Admin Dashboard</span>
                        </a>
                     </li>
                     <li>
                        <a class="sidenav-item-link" href="{{url('sitenew')}}">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">User site</span>
                        </a>
                     </li>
                     <li class="section-title">
                        Apps
                     </li>
                     <li>
                        <a class="sidenav-item-link" href="{{url('category')}}">
                        <i class="mdi mdi-folder"></i>
                        <span class="nav-text">Categories</span>
                        </a>
                     </li>
                     <li>
                        <a class="sidenav-item-link" href="{{url('showallreaction')}}">
                        <i class="mdi mdi-folder"></i>
                        <span class="nav-text">Reactions</span>
                        </a>
                     </li>
                     <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
                        <i class="mdi mdi-comment"></i>
                        <span class="nav-text">Comments</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="comments" data-parent="#sidebar-menu">
                           <div class="sub-menu">
                              <li>
                                 <a class="sidenav-item-link" href="{{url('showallcomments')}}">
                                 <span class="nav-text">View Comments</span>
                                 </a>
                              </li>
                           </div>
                        </ul>
                     </li>
               
                    
                     <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#posts" aria-expanded="false" aria-controls="posts">
                        <i class="mdi mdi-file-document"></i>
                        <span class="nav-text">Posts</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="posts" data-parent="#sidebar-menu">
                           <div class="sub-menu">
                              <li>
                                 <a class="sidenav-item-link" href="{{url('create')}}">
                                 <span class="nav-text">Create Post</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="sidenav-item-link" href="{{url('post')}}">
                                 <span class="nav-text">View Posts</span>
                                 </a>
                              </li>
                           </div>
                        </ul>
                     </li>
                     <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#research" aria-expanded="false" aria-controls="research">
                        <i class="mdi mdi-magnify"></i>
                        <span class="nav-text">Research</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="research" data-parent="#sidebar-menu">
                           <div class="sub-menu">
                              <li>
                                 <a class="sidenav-item-link" href="{{url('createResarch')}}">
                                 <span class="nav-text">Create Research</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="sidenav-item-link" href="{{url('show_reseach_paper')}}">
                                 <span class="nav-text">View Research</span>
                                 </a>
                              </li>
                           </div>
                        </ul>
                     </li>
                     <li class="has-sub">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Users</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="users" data-parent="#sidebar-menu">
                           <div class="sub-menu">
                              <li>
                                 <a class="sidenav-item-link" href="{{url('showuser')}}">
                                 <i class="mdi mdi-account-multiple"></i>
                                 <span class="nav-text">View Users</span>
                                 </a>
                              </li>
                           </div>
                        </ul>
                     </li>
                  </ul>
               </div>
               <div class="sidebar-footer">
                  <div class="sidebar-footer-content">
                     <ul class="d-flex">
                        <li>
                           <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a>
                        </li>
                        <li>
                           <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </aside>
         <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header" id="header">
               <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                  <!-- Sidebar toggle button -->
                  <button id="sidebar-toggler" class="sidebar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  </button>
                  <span class="page-title">dashboard</span>
                  <div class="navbar-right ">
                     <!-- search form -->
                     <ul class="nav navbar-nav">
                        <!-- Offcanvas -->
                        <li class="custom-dropdown">
                           <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:">
                           <i class="mdi mdi-contacts icon"></i>
                           </a>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                           <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                           <img src="{{asset('site/images/favicon.png')}}" class="user-image rounded-circle" alt="User Image" />
                           <span class="d-none d-lg-inline-block">Admin </span>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-right">
               
      
                              
                              <!-- <li>
                                 <a class="dropdown-link-item" href="user-account-settings.html">
                                 <i class="mdi mdi-settings"></i>
                                 <span class="nav-text">Profile</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="dropdown-link-item" href="user-account-settings.html">
                                 <i class="mdi mdi-settings"></i>
                                 <span class="nav-text">New password</span>
                                 </a>
                              </li> -->
                              <a href="{{route('authlogout')}}" class="dropdown-item btn btn-solid-border btn-round-full">logout</a>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </nav>
            </header>
            <!-- ====================================
               ——— PAGE WRAPPER
               ===================================== -->
            <!-- content will be here -->
            @yield('content')
            <footer class="footer mt-auto">
               <div class="copyright bg-white">
                  <p>
                     &copy; <span id="copy-year"></span> Copyright 2023 By Nadeem ali shar <a class="text-primary" href="" target="_blank" ></a>.
                  </p>
               </div>
               <script>
                  var d = new Date();
                  var year = d.getFullYear();
                  document.getElementById("copy-year").innerHTML = year;
               </script>
            </footer>
         </div>
      </div>
      <script src="{{asset('auth/plugins/jquery/jquery.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/simplebar/simplebar.min.js')}}"></script>
                  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
                  <script src="{{asset('auth/plugins/prism/prism.js')}}"></script>
                  <script src="{{asset('auth/plugins/select2/js/select2.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
                  <script src="{{asset('auth/js/mono.js')}}"></script>
                  <script src="{{asset('auth/js/chart.js')}}"></script>
                  <script src="{{asset('auth/js/map.js')}}"></script>
                  <script src="{{asset('auth/js/custom.js')}}"></script>    
      @yield('script')

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="{{asset('auth/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <title>@yield('title')</title>
    
  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

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

    
    <div id="toaster"></div>
    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <img src="{{asset('asset/auth/images/logo.png')}}" alt="Mono">
                <span class="brand-name">MONO</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="index.html">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Business Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="analytics.html">
                      <i class="mdi mdi-chart-line"></i>
                      <span class="nav-text">Analytics Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li class="section-title">
                    Apps
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="{{url('category')}}">
                      <i class="mdi mdi-wechat"></i>
                      <span class="nav-text">category</span>
                    </a>
                  </li>
                

   <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                      aria-expanded="false" aria-controls="email">
                      <i class="mdi mdi-email"></i>
                      <span class="nav-text">Posts</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="email"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{url('create')}}">
                                <span class="nav-text">Create post</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{url('post')}}">
                                <span class="nav-text">Posts </span>
                                
                              </a>
                            </li>
                           
                            <li >
                              <a class="sidenav-item-link" href="email-compose.html">
                                <span class="nav-text">Email Compose</span>
                                
                              </a>
                            </li>
                          
                      </div>
                    </ul>
                  </li>
                
                  <li
                   >
                    <a class="sidenav-item-link" href="contacts.html">
                      <i class="mdi mdi-phone"></i>
                      <span class="nav-text">Contacts</span>
                    </a>
                  </li>
                
    
                  <li
                   >
                    <a class="sidenav-item-link" href="team.html">
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">Team</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="calendar.html">
                      <i class="mdi mdi-calendar-check"></i>
                      <span class="nav-text">Calendar</span>
                    </a>
                  </li>
                

                

                
                 <!-- copy email text -->

                

                
                  <li class="section-title">
                    UI Elements
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-outline"></i>
                      <span class="nav-text">UI Components</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="alert.html">
                                <span class="nav-text">Alert</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="badge.html">
                                <span class="nav-text">Badge</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="breadcrumb.html">
                                <span class="nav-text">Breadcrumb</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#buttons"
                            aria-expanded="false" aria-controls="buttons">
                            <span class="nav-text">Buttons</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="buttons">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="button-default.html">Button Default</a>
                              </li>
                              
                              <li >
                                <a href="button-dropdown.html">Button Dropdown</a>
                              </li>
                              
                              <li >
                                <a href="button-group.html">Button Group</a>
                              </li>
                              
                              <li >
                                <a href="button-social.html">Button Social</a>
                              </li>
                              
                              <li >
                                <a href="button-loading.html">Button Loading</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="card.html">
                                <span class="nav-text">Card</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="carousel.html">
                                <span class="nav-text">Carousel</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="collapse.html">
                                <span class="nav-text">Collapse</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="editor.html">
                                <span class="nav-text">Editor</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="list-group.html">
                                <span class="nav-text">List Group</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="modal.html">
                                <span class="nav-text">Modal</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="pagination.html">
                                <span class="nav-text">Pagination</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="popover-tooltip.html">
                                <span class="nav-text">Popover & Tooltip</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="progress-bar.html">
                                <span class="nav-text">Progress Bar</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="spinner.html">
                                <span class="nav-text">Spinner</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="switches.html">
                                <span class="nav-text">Switches</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables"
                            aria-expanded="false" aria-controls="tables">
                            <span class="nav-text">Tables</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="tables">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="bootstarp-tables.html">Bootstrap Tables</a>
                              </li>
                              
                              <li >
                                <a href="data-tables.html">Data Tables</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="tab.html">
                                <span class="nav-text">Tab</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="toaster.html">
                                <span class="nav-text">Toaster</span>
                                
                              </a>
                            </li>
                         
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                            aria-expanded="false" aria-controls="icons">
                            <span class="nav-text">Icons</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="icons">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="material-icons.html">Material Icon</a>
                              </li>
                              
                              <li >
                                <a href="flag-icons.html">Flag Icon</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                       
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                            aria-expanded="false" aria-controls="forms">
                            <span class="nav-text">Forms</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="forms">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="basic-input.html">Basic Input</a>
                              </li>
                              
                              <li >
                                <a href="input-group.html">Input Group</a>
                              </li>
                              
                              <li >
                                <a href="checkbox-radio.html">Checkbox & Radio</a>
                              </li>
                              
                              <li >
                                <a href="form-validation.html">Form Validation</a>
                              </li>
                              
                              <li >
                                <a href="form-advance.html">Form Advance</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                       
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                            aria-expanded="false" aria-controls="maps">
                            <span class="nav-text">Maps</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="maps">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="google-maps.html">Google Map</a>
                              </li>
                              
                              <li >
                                <a href="vector-maps.html">Vector Map</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                            aria-expanded="false" aria-controls="widgets">
                            <span class="nav-text">Widgets</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="widgets">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="widgets-general.html">General Widget</a>
                              </li>
                              
                              <li >
                                <a href="widgets-chart.html">Chart Widget</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                    
                 
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                       
                            
                      </div>
                    </ul>
                
                
                 
                    <ul  class="collapse"  id="users"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                           
                        
                       
                          
                          
                          
                          
                      </div>
                    </ul>
                  </li>
                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <i class="mdi mdi-account"></i>
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="authentication"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                      
                            <li >
                              <a class="sidenav-item-link" href="sign-in.html">
                                <span class="nav-text">Sign In</span>
                                
                              </a>
                            </li>
                          
                          
                            <li >
                              <a class="sidenav-item-link" href="sign-up.html">
                                <span class="nav-text">Sign Up</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="reset-password.html">
                                <span class="nav-text">Reset Password</span>
                                
                              </a>
                            </li>
                          
                      </div>
                    </ul>
                  </li>
                

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#other-page"
                      aria-expanded="false" aria-controls="other-page">
                      <i class="mdi mdi-file-multiple"></i>
                      <span class="nav-text">Other pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="other-page"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="invoice.html">
                                <span class="nav-text">Invoice</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="404.html">
                                <span class="nav-text">404 page</span>
      
                              </a>
                            </li>
                    
                            <li >
                              <a class="sidenav-item-link" href="page-comingsoon.html">
                                <span class="nav-text">Coming Soon</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="page-maintenance.html">
                                <span class="nav-text">Maintenance</span>
                                
                              </a>
                            </li>
                          
                      </div>
                    </ul>
                  </li>
                
                  <li class="section-title">
                    Documentation
                  </li>
              
                  <li
                   >
                    <a class="sidenav-item-link" href="getting-started.html">
                      <i class="mdi mdi-airplane"></i>
                      <span class="nav-text">Getting Started</span>
                    </a>
                  </li>
                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#customization"
                      aria-expanded="false" aria-controls="customization">
                      <i class="mdi mdi-square-edit-outline"></i>
                      <span class="nav-text">Customization</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="customization"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                       
                            <li >
                              <a class="sidenav-item-link" href="navbar-customization.html">
                                <span class="nav-text">Navbar</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="sidebar-customization.html">
                                <span class="nav-text">Sidebar</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="styling.html">
                                <span class="nav-text">Styling</span>
                                
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
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
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
      <div class="search-form">
        <form action="index.html" method="get">
          <div class="input-group input-group-sm" id="input-group-search">
            <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
            <div class="input-group-append">
              <button class="btn" type="button">/</button>
            </div>
          </div>
        </form>
        <ul class="dropdown-menu dropdown-menu-search">

          <li class="nav-item">
            <a class="nav-link" href="index.html">Morbi leo risus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Vestibulum at eros</a>
          </li>

        </ul>

      </div>

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
            <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
            <span class="d-none d-lg-inline-block">John Doe</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li>
              <a class="dropdown-link-item" href="user-profile.html">
                <i class="mdi mdi-account-outline"></i>
                <span class="nav-text">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-link-item" href="email-inbox.html">
                <i class="mdi mdi-email-outline"></i>
                <span class="nav-text">Message</span>
                <span class="badge badge-pill badge-primary">24</span>
              </a>
            </li>
            <li>
              <a class="dropdown-link-item" href="user-activities.html">
                <i class="mdi mdi-diamond-stone"></i>
                <span class="nav-text">Activitise</span></a>
            </li>
            <li>
              <a class="dropdown-link-item" href="user-account-settings.html">
                <i class="mdi mdi-settings"></i>
                <span class="nav-text">Account Setting</span>
              </a>
            </li>

            <li class="dropdown-footer">
             <form  id="logout-form" action="{{route('logout')}}" method="post">
             <a id="logout-button" class="dropdown-link-item" href="javascript:void(0)"> <i class="mdi mdi-logout"></i> Log Out </a>
               @csrf
            </form>
            </li>
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
                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
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
       <script src="{{asset('auth/https://unpkg.com/hotkeys-js/dist/hotkeys.min.js')}}"></script>
       <script src="{{asset('auth/plugins/apexcharts/apexcharts.js')}}"></script>
       <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> 
       <script src="{{asset('auth/plugins/toaster/toastr.min.js')}}"></script>      
          @yield('script')      
                  

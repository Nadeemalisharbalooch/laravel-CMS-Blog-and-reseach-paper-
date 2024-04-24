
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Agency Template v1.0">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('site/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{asset('site/plugins/themify/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('site/plugins/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('site/plugins/magnific-popup/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
  
  <!--Favicon-->
  <link rel="icon" href="{{asset('site/images/favicon.png')}}" type="image/x-icon">

</head>

<body>

<!-- Header Start -->

  <div id="navbar" class="bg bg-success">
    <div class="container">
      <div class="row ">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg px-0 py-4">
            <a class="navbar-brand" href="javascript:(0)">
             <img src="{{asset('site/images/favicon.png')}}" width="80px" alt="">
            </a>
      
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
            </button>
      
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item @@home">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown @@about">
                  <a class="nav-link " href="#"  aria-haspopup="true" aria-expanded="false">About </a>
                 
                </li>
                <li class="nav-item @@service"><a class="nav-link" href="{{url('service')}}">Services</a></li>
          
                <li class="nav-item @@contact"><a class="nav-link" href="{{url('contact')}}"> Contact</a></li>
              </ul>
      
              <div class="my-2 my-md-0 ml-lg-4 text-center">
                @if(auth()->check()) 
                <a class="dropdown-item btn btn-solid-border btn-round-full" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        @else 
                                     <a class="btn btn-solid-border btn-round-full" href="{{url('loginuser')}}">Login</a>
                          
                                    </a>
                                        
@endif
                                    </form>
                
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

@yield('content')

<footer class="footer section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Company</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="about.html">Terms & Conditions</a></li>
            <li><a href="about.html">Privacy Policy</a></li>
            <li><a href="cobtact.html">Support</a></li>
            <li><a href="cobtact.html">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Quick Links</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="">About</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="blog-grid.html">Blogs</a></li>
            <li><a href="">viewContact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Subscribe Us</h4>
          <p>Subscribe to get latest news article and resources </p>

          <form action="#" class="sub-form">
            <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
            <a href="#" class="btn btn-main btn-small">subscribe</a>
          </form>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="widget">
          <div class="logo mb-4">
            <h3></span></h3>
          </div>
          <h6><a href="mailto:support@gmail.com">nadeemkhanshar50@gmail.com</a></h6>
          <a href="tel:+23-345-67890"><span class="text-color h4">+923022613382</span></a>
        </div>
      </div>
    </div>

    <div class="footer-btm pt-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            Copyright &copy; 2023, Designed &amp; Developed by <a href=""
              >Nadeem ali shar</a>
          </div>
        </div>
        <div class="col-lg-6 text-left text-lg-right">
          <ul class="list-inline footer-socials">
            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
  <span class="icon fa fa-angle-up"></span>
</div>


<!-- 
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="{{asset('site/')}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4.3.1 -->
<script src="{{asset('site/')}}plugins/bootstrap/bootstrap.min.js"></script>
<!--  Magnific Popup-->
<script src="{{asset('site/')}}plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Slick Slider -->
<script src="{{asset('site/')}}plugins/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="{{asset('site/')}}plugins/counterup/jquery.waypoints.min.js"></script>
<script src="{{asset('site/')}}plugins/counterup/jquery.counterup.min.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{asset('site/')}}plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="javascript.js">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <style>
      body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.half-background-section {
    height: 50vh;
    background-image: url('https://img.freepik.com/free-photo/office-table-with-cup-coffee-keyboard-notepad_1220-4617.jpg'); /* Initial background image */
    background-size: cover;
    background-position: top;
    
    display: flex;
    align-items: flex-end;
    justify-content: center;
    text-align: center;
}
body {
        margin: 0; /* Reset body margin */
    }

    #projectContainer {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .projectCard {
        background-color: #fff;
        border-radius: 8px;
        padding: 2%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
        width: calc(100% - 20px); /* Full width minus the gap */
        margin-bottom: 20px; /* Add some bottom margin */
    }

    .projectCard:hover {
        transform: scale(1.05);
    }

    .projectCard img {
        width: 100%;
        max-height: 200px; /* Set a maximum height */
        border-radius: 8px 8px 0 0;
        display: block; /* Remove any potential spacing caused by inline-block */
        margin: 0; /* Reset margin to remove any default spacing */
    }

    .projectCardContent {
        padding: 20px; /* Add padding for text content */
    }

    .button-style {
        background-color: red;
        margin: 0;
    }

    @media (min-width: 768px) {
        .projectCard {
            width: calc(50% - 20px); /* Two cards per row */
        }
    }

    @media (min-width: 992px) {
        .projectCard {
            width: calc(33.333% - 20px); /* Three cards per row */
        }
    }


/* Responsive Design for Smaller Screens */
@media (max-width: 768px) {
    .contact-info {
        flex-direction: column;
    }   
}

/* Media Query for Larger Screens */
@media (min-width: 768px) {
    .flex-container section {
        max-width: calc(50% - 20px); /* Adjusts the max width of each section in large screens */
    }
}

.btn-round-full {
    border-radius: 10%; /* Makes the button circular */
  color:white;
}

.btn-round-full:hover {
    background-color: red; /* Change background color on hover */
    color:white;
}
.btn:hover {
    background-color: red; /* Change background color on hover */
    color:white;
}

.more{
    background-color:green;
}


.primarycolor{
    background-color:green;
}


    </style>  
</head>
<body>
     <div class="primarycolor">
     <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="#"><img src="{{asset('site/images/favicon.png')}}" width="60px" alt="logo"> company name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white btn btn" href="javascript:(0)">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white btn" href="{{url('reseach')}}" >Reseach paper</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white btn" href="contacts.php">about </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link text-white btn" href="alert.php">Contacts</a>
                </li>
               
            </ul>
            <div class="">
                @if(auth()->check()) 
                <a class="btn btn-round-full" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

@else 

<a class="btn btn-round-full" href="{{url('loginuser')}}">Login</a>

                                        
@endif
                  </form>
                
              </div>
        </div>
    </nav>

     </div>
<!-- 
<div class="half-background-section">
<div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg text-white">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Ours blog</li>
          </ul>
        </div>
      </div>
    </div>
    </div> -->
    <!-- here main content of site -->
   @yield('content')
  <br>
    <footer class="footer bg-dark text-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Company Name</h5>
        <p>About Us</p>
        <p>Services</p>
        <p>Products</p>
        <p>Blog</p>
        <p>Contact Us</p>
      </div>
      <div class="col-md-4">
        <h5>Contact Information</h5>
        <p>123 Main Street, City, State, ZIP</p>
        <p>Phone: (123) 456-7890</p>
        <p>Email: info@example.com</p>
      </div>
      <div class="col-md-4">
        <h5>Connect With Us</h5>
        <a href="#"><i class="fab fa-facebook-f fa-lg text-light mr-3"></i></a>
        <a href="#"><i class="fab fa-twitter fa-lg text-light mr-3"></i></a>
        <a href="#"><i class="fab fa-instagram fa-lg text-light mr-3"></i></a>
        <a href="#"><i class="fab fa-linkedin-in fa-lg text-light mr-3"></i></a>
      </div>
    </div>
  </div>
  <div class="container text-center mt-3">
    <p>&copy; 2024 Company Name. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
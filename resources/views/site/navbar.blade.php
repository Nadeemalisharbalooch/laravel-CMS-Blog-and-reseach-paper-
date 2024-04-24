<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>digital solutions</title>
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
    background-image: url('https://images.unsplash.com/photo-1488372759477-a7f4aa078cb6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aW1hZ2V8ZW58MHx8MHx8fDA%3D'); /* Initial background image */
    background-size: cover;
    background-position: top;
    
    display: flex;
    align-items: flex-end;
    justify-content: center;
    text-align: center;
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
    </style>  
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Digital Solutions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php" >Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Contact</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="alert.php">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="alert.php">Business</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="alert.php">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alert.php">web templates</a>
                </li>
            </ul>
        </div>
    </nav>


<div class="half-background-section">
    <h2>welcome income data in pakistan </h2>
    </div>
    <!-- here main content of site -->

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
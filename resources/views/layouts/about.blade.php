<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
  }
  .navbar {
    background-color: #343a40;
  }
  .navbar-brand, .nav-link {
    color: #fff;
  }
  .team-member {
    margin-bottom: 30px;
  }
  .team-member img {
    max-width: 100%;
    border-radius: 50%;
  }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Your Company</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="display-4">Meet Our Team</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-4 offset-lg-4 d-flex justify-content-center">
      <div class="team-member text-center">
        <img src="https://via.placeholder.com/150" alt="Ph.D. Teacher" class="img-fluid rounded-circle">
        <h3>Dr. Emily Smith</h3>
        <p>Ph.D. Teacher</p>
        <p>Email: emily.smith@example.com</p>
        <p>Education: Ph.D. in Education</p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3 mt-5">
  <div class="container">
    <p>&copy; 2024 Your Company. All Rights Reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

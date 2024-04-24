<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Custom styles for the navbar */
      /* .navbar {
    background-color:#0000ff;
} */




        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M7 7l16 16M23 7L7 23'/%3E%3C/svg%3E");
        }

        .navbar-nav .nav-link {
            color: #ffffff; /* Change this to your desired text color */
        }

        .navbar-nav .nav-link:hover {
            background-color: #b3b3b3; /* Change this to your desired hover color */
        }

        .navbar-toggler.open .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M7 7l16 16M23 7L7 23'/%3E%3C/svg%3E");
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

    <!-- Rest of your webpage content -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script>
        $(document).ready(function() {
            $('.navbar-toggler').click(function() {
                $(this).toggleClass('open');
            });
        });
    
</script>
  
</body>
</html>

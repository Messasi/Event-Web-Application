<?php
session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>Login/Resgister</title>
</head>
<body>
     <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-3 shadow-sm">
      <div class="container px-4">
          <!-- Logo -->
          <a href="Home.php" class="nav-logo">NationsTickets</a>
  
          <!-- Mobile Menu Toggle Button -->
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#top-navbar" aria-controls="top-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lni lni-menu-hamburger-1"></i>
          </button>
  
          <!-- Navbar Content -->
          <div class="collapse navbar-collapse" id="top-navbar">
              <!-- Navigation Links -->
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <!-- Home Link -->
                  <li class="nav-item">
                      <a class="nav-link px-3 active" href="Home.html">
                          <span class="nav-icon d-lg-none"><i class="bi bi-house-door"></i></span>
                          <span class="nav-text d-none d-lg-inline">Find Events</span>
                      </a>
                  </li>
  
                  <!-- Categories Dropdown -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="nav-icon d-lg-none"><i class="bi bi-grid"></i></span>
                          <span class="nav-text d-none d-lg-inline">Categories</span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="MusicScreen.php">Music</a></li>
                          <li><a class="dropdown-item" href="SportsScreen.php">Sports</a></li>
                          <li><a class="dropdown-item" href="NightlifeScreen.php">NightLife</a></li>
                      </ul>
                  </li>
  
                  <!-- Help Link -->
                  <li class="nav-item">
                      <a class="nav-link px-3" href="Help.php">
                          <span class="nav-icon d-lg-none"><i class="bi bi-question-circle"></i></span>
                          <span class="nav-text d-none d-lg-inline">Help</span>
                      </a>
                  </li>
              </ul>
  
              <!-- Icon Navigation -->
              <ul class="navbar-nav icon-nav mb-2 mb-lg-0">
                  <!-- Wishlist Link -->
                  <li class="nav-item nav-item-icon-left">
                      <a class="nav-link px-3" href="Wishlist.php">
                          <span class="nav-icon"><i class="bi bi-heart"></i></span>
                      </a>
                  </li>
  
                  <!-- Cart Link -->
                  <li class="nav-item nav-item-icon-left">
                      <a class="nav-link px-3" href="Cart.php">
                          <span class="nav-icon"><i class="bi bi-cart"></i></span>
                      </a>
                  </li>
  
                  <!-- Profile Link -->
                  <li class="nav-item nav-item-icon-left">
                  <a class="nav-link px-3" href="<?php echo isset($_SESSION['email']) ? 'profile.php' : 'loginRegister.php'; ?>">
                        <span class="nav-icon"><i class="bi bi-person"></i></span>
                        <?php echo isset($_SESSION['email']) ?>
                    </a>
                  </li>
              </ul>
  
              <!-- Search Form -->
              <form id="searchForm" class="d-flex align-items-center ms-3 my-2 my-lg-0" role="search">
                  <div class="input-group w-100 w-lg-auto">
                      <input id="searchInput" class="form-control" type="search" placeholder="Search for events" aria-label="Search">
                      <button class="btn btn-outline-primary" type="submit">
                          <i class="bi bi-search"></i>
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </nav>
  
      <!--Create Login form-->
      <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 box-area shadow bg-white">
            <!-- Left Box -->
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="Images/Register/pexels-yankrukov-9001968 (1).jpg" class="img-fluid" alt="2 singers Image">
                </div>
                <p class="text-white fs-3 fw-bold">Be Verified</p>
                <small class="text-white text-wrap text-center">Hello, experience life beyond the sea</small>
            </div>
    
            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="header-text text-center mb-4">
                    <h2 class="text-primary">Hello</h2>
                    <p>We are happy to have you back</p>
                </div>
                <form id="loginForm" method="POST" action="profile.php">
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Password</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#" class="text-primary">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" name="login" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
    
                    <div class="sign-in-buttons">
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-lg btn-outline-primary w-100 fs-6 d-flex align-items-center justify-content-center">
                                <img src="Images/Login Form/Google logo.png" class="me-2" style="width: 20px;" alt="Google Logo">
                                Sign in with Google
                            </button>
                        </div>
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-lg btn-outline-dark w-100 fs-6 d-flex align-items-center justify-content-center">
                                <img src="Images/Login Form/apple logo login form.png" class="me-2" style="width: 20px;" alt="Apple Logo">
                                Sign in with Apple
                            </button>
                        </div>
                    </div>

                    <div class="row text-center">
                        <small>Don't have an account? <a href="Register.html" class="text-primary">Sign up here</a></small>
                    </div>

                    <!-- CAPTCHA Section -->
                   
                </form>
            </div>
        </div>
    </div>
    
    
    

      <!--Footer-->
      <footer class="bg-dark text-light py-4">
    <div class="container px-4">
        <div class="row">
            <!-- Company Info -->
            <div class="col-6 col-lg-4">
                <h3 class="pt-3 fw-bold">NationsTickets</h3>
                <p>Your go-to destination for booking the best events worldwide.</p>
                <p><strong>Customer Support:</strong> +1 (800) 555-1234</p>
                <p class="mb-0"><strong>Email:</strong> support@nationstickets.com</p>    
            </div>

            <!-- Categories -->
            <div class="col">
                <h4 class="pt-3 fw-bold">Categories</h4>
                <ul class="list-unstyled py-3">
                    <li><a href="MusicScreen.html" class="text-decoration-none text-light">Music</a></li>
                    <li><a href="SportsScreen.html" class="text-decoration-none text-light">Sports</a></li>
                    <li><a href="NightlifeScreen.html" class="text-decoration-none text-light">Nightlife</a></li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="col-6 col-lg-3 text-lg-end">
                <h4 class="pt-3 fw-bold">Follow Us</h4>
                <div class="py-3">
                    <a href="https://www.facebook.com/nationstickets" class="text-decoration-none text-light me-3">
                        <i class="fa-brands fa-facebook"></i> Facebook
                    </a>
                    <br>
                    <a href="https://www.twitter.com/nationstickets" class="text-decoration-none text-light me-3">
                        <i class="fa-brands fa-twitter"></i> Twitter
                    </a>
                    <br>
                    <a href="https://www.instagram.com/nationstickets" class="text-decoration-none text-light">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Copyright -->
        <div class="d-flex justify-content-between">
            <p>&copy; 2025 NationsTickets. All Rights Reserved.</p>
            <p><a href="terms.html" class="text-decoration-none text-light">Terms & Conditions</a> | 
               <a href="privacy.html" class="text-decoration-none text-light">Privacy Policy</a></p>
        </div>
    </div>
</footer>
      

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="script.js"></script>
    
      <!-- Bootstrap JavaScript bundle (includes Bootstrap's JavaScript) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
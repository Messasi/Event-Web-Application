<?php
session_start();
include ("connect.php");



if(isset($_POST['register'])){
    $firstName= $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $postCode = $_POST['postCode'];
    $DOB = $_POST['DOB'];
    $houseNumber = $_POST['houseNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if passwords match 
    if ($password !== $confirmPassword) {
        die("Passwords do not match!");
    }

    // Check if email is already registered
    $checkEmail="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($checkEmail);

    if($result->num_rows > 0){
        die("Email address is already in use!"); // Stops execution
    }

    // Store password as plain text (NOT SECURE)
    $insertQuery="INSERT INTO users (firstName, lastName, phoneNumber, address, postCode, DOB, houseNumber, email, password)
                  VALUES ('$firstName','$lastName','$phoneNumber','$address','$postCode','$DOB','$houseNumber','$email','$password')";

    if($conn->query($insertQuery) === TRUE){
        header("Location: loginRegister.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists
    $sql="SELECT * FROM users WHERE email='$email'"; 
    $result=$conn->query($sql);

    if($result->num_rows > 0){
        $row=$result->fetch_assoc();
        
        // Compare plain text passwords
        if($password === $row['password']) {
            $_SESSION['email']=$row['email'];
            $_SESSION['userID'] = $row['userID'];
            header("Location: profile.php");
            exit();
        } else {
            echo "Incorrect Email or Password";
        }
    } else {
        echo "Incorrect Email or Password";
    }
}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Shopping Basket</title>
</head>
<body>

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

  <a href="logout.php">Logout</a>

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
  <scpict src="script.js"></script>
<!-- Bootstrap JavaScript bundle (includes Bootstrap's JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Linking the styleSheets-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Help</title>
</head>
<body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg py-3 shadow-sm">
      <div class="container px-4">
          <!-- Logo -->
          <a href="Home.html" class="nav-logo">NationsTickets</a>
  
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
                          <li><a class="dropdown-item" href="MusicScreen.html">Music</a></li>
                          <li><a class="dropdown-item" href="SportsScreen.html">Sports</a></li>
                          <li><a class="dropdown-item" href="NightlifeScreen.html">NightLife</a></li>
                      </ul>
                  </li>
  
                  <!-- Help Link -->
                  <li class="nav-item">
                      <a class="nav-link px-3" href="Help.html">
                          <span class="nav-icon d-lg-none"><i class="bi bi-question-circle"></i></span>
                          <span class="nav-text d-none d-lg-inline">Help</span>
                      </a>
                  </li>
              </ul>
  
              <!-- Icon Navigation -->
              <ul class="navbar-nav icon-nav mb-2 mb-lg-0">
                  <!-- Wishlist Link -->
                  <li class="nav-item nav-item-icon-left">
                      <a class="nav-link px-3" href="Wishlist.html">
                          <span class="nav-icon"><i class="bi bi-heart"></i></span>
                      </a>
                  </li>
  
                  <!-- Cart Link -->
                  <li class="nav-item nav-item-icon-left">
                      <a class="nav-link px-3" href="Cart.html">
                          <span class="nav-icon"><i class="bi bi-cart"></i></span>
                      </a>
                  </li>
  
                  <!-- Profile Link -->
                  <li class="nav-item nav-item-icon-left">
                      <a class="nav-link px-3" href="loginRegister.php">
                          <span class="nav-icon"><i class="bi bi-person"></i></span>
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


    <!--Search bar-->
    <div class="help-section">
      <h2 class="help-header">How can we help?</h2>
      <div class="search-bar-container">
        <input type="text" class="form-control search-bar" placeholder="FAQs, Search for help topics....">
      </div>
    </div>

    <!--H1 header faq-->
    <div class="faq-heading text-center my-5">
        <h1 class="display-5">Frequently Asked Questions (FAQ)</h1>
      </div>
  

    <!--Accordian-->
    <div class="container my-5">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="accordion" id="accordionExample">
              <!-- FAQ 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    What events can I book through this website?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>You can book tickets for music events, sports matches, and nightlife experiences through our platform.</p>
                  </div>
                </div>
              </div>
      
              <!-- FAQ 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How do I purchase tickets?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>You can purchase tickets by adding them to your basket and completing checkout.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can I get refund for my tickets 
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Refunds are availible up to 48 hours before the event.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    What payment methods do you accept?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>We accept all major cards and online payment methods.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Can I transfer my ticket?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Yes but transfers are allowed up to 24 hours before the event.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Are there any additional fees when booking tickets?
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>A small service fee isn applied to cover processing and platform services.</p>
                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    What security measures are in place at events?
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Our events are staffed with professional security personel.</p>
                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Are there any age restritions?
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Age restrictions may very depending on the event.</p>
                  </div>
                </div>
              </div>
            </div>
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

   <!-- Bootstrap JavaScript bundle (includes Bootstrap's JavaScript) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
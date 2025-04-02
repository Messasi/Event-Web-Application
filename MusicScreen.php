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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Shopping Basket</title>
</head>
<script>
 window.onload = function() {
    loadMusicXML();
};

function loadMusicXML() {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            populateMusicCards(this);
        }
    };
    xmlhttp.open("GET", "data/music.xml", true);
    xmlhttp.send();
}

function populateMusicCards(xml) {
    const xmlDoc = xml.responseXML;
    const events = xmlDoc.getElementsByTagName("event");

    // Loop through the first 3 events and populate the cards
    for (let i = 0; i < 3 && i < events.length; i++) {
        const event = events[i];

        // Get values from XML and check for null before accessing nodeValue
        const name = event.getElementsByTagName("name")[0]?.childNodes[0]?.nodeValue || "No name available";
        const venue = event.getElementsByTagName("venue")[0]?.childNodes[0]?.nodeValue || "No venue available";
        const price = event.getElementsByTagName("price")[0]?.childNodes[0]?.nodeValue || "Free";
        const datetime = event.getElementsByTagName("datetime")[0]?.childNodes[0]?.nodeValue || "TBA";
        const image = event.getElementsByTagName("image")[0]?.childNodes[0]?.nodeValue || "default-image.jpg";
        const description = event.getElementsByTagName("image")[0]?.childNodes[0]?.nodeValue || "no description availible";


        // Populate the card elements
        document.getElementById(`music-card${i + 1}-img`).src = image;
        document.getElementById(`music-card${i + 1}-title`).textContent = name;
        document.getElementById(`music-card${i + 1}-desc`).textContent = venue;
        document.getElementById(`music-card${i + 1}-price`).textContent = price;
        document.getElementById(`music-card${i + 1}-date`).textContent = datetime;
        document.getElementById(`music-card${i + 1}-description`).textContent = description;
    }
}

document.addEventListener("DOMContentLoaded", function () {
  const searchForm = document.getElementById("searchForm");
  const searchInput = document.getElementById("searchInput");
  const cards = document.querySelectorAll(".card"); // Select all card elements
  const noResults = document.getElementById("noResults");

  searchForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent page relad
    const query = searchInput.value.toLowerCase().trim();

    // Flag to track if any cards match
    let hasResults = false;

    // Loop through all cards
    cards.forEach((card) => {
      const cardText = card.textContent.toLowerCase(); // Get card's text content
      if (cardText.includes(query)) {
        card.style.display = "block"; // Show card if it matches
        hasResults = true;
      } else {
        card.style.display = "none"; // Hide card if it doesn't match
      }
    });

    
  });
});

document.addEventListener("DOMContentLoaded", function () {
    const hearts = document.querySelectorAll(".favorite-heart");
    const favoritesContainer = document.getElementById("favorites-section");

    hearts.forEach((heart) => {
        heart.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevents card click
            event.preventDefault();  // Stops default link behavior if inside <a>

            this.classList.toggle("active");
            const icon = this.querySelector("i");
            const card = this.closest(".event-card"); // Get the parent card
            const eventId = card.getAttribute("data-id"); // Unique ID for event
            const title = card.getAttribute("data-title");
            const imageSrc = card.querySelector(".card-img-top").src;
            const description = card.getAttribute("data-description");

            if (this.classList.contains("active")) {
                icon.classList.remove("fa-regular");
                icon.classList.add("fa-solid"); // Solid heart
                addToFavorites(eventId, title, imageSrc, description);
            } else {
                icon.classList.remove("fa-solid");
                icon.classList.add("fa-regular"); // Outline heart
                removeFromFavorites(eventId);
            }
        });
    });

    function addToFavorites(id, title, image, description) {
        if (!document.getElementById(`fav-${id}`)) {
            const favCard = document.createElement("div");
            favCard.classList.add("favorite-card");
            favCard.setAttribute("id", `fav-${id}`);
            favCard.innerHTML = `
                <div class="card horizontal-card shadow-sm">
                    <img src="${image}" class="card-img-left" alt="${title}">
                    <div class="card-body">
                        <h5 class="card-title">${title}</h5>
                        <p class="card-text">${description}</p>
                    </div>
                </div>
            `;
            favoritesContainer.appendChild(favCard);
        }
    }

    function removeFromFavorites(id) {
        const favCard = document.getElementById(`fav-${id}`);
        if (favCard) {
            favCard.remove();
        }
    }
});
</script>
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


      <!--Make the shopping cards and the header-->
      <div class="section-header">
        <img src="Images/SubPages/pexels-vitalina-3807093.jpg" alt="Sports Event">
        <h1>Music Night Events</h1>
    </div>
  
    <div class="section-title">
        <h1>Music Events in Nottingham</h1>
  
        <br><br>
        <table id="demo"></table>
  
  
        <div class="container section-cards">
            <div class="row g-4">
              <!-- Card 1 -->
              <div class="col-12 col-md-4">
                <a href="event1.html" class="card shadow-sm">
                    <div class="favorite-heart">
                        <i class="fa-regular fa-heart"></i> <!-- Outlined heart initially -->
                      </div>
                  <img class="card-img-top" id="music-card1-img" alt="Music Event 1">
                  <div class="card-body">
                    <h5 class="card-title" id="music-card1-title"></h5>
                    <p class="card-text" id="music-card1-desc"></p>
                    <p class="card-text"><strong>Price:</strong> <span id="music-card1-price"></span></p>
                    <p class="card-text"><strong>Date:</strong> <span id="music-card1-date"></span></p>
                  </div>
                </a>
              </div>
          
              <!-- Card 2 -->
              <div class="col-12 col-md-4">
                <a href="event2.html" class="card shadow-sm">
                    <div class="favorite-heart">
                        <i class="fa-regular fa-heart"></i> <!-- Outlined heart initially -->
                      </div>
                  <img class="card-img-top" id="music-card2-img" alt="Music Event 2">
                  <div class="card-body">
                    <h5 class="card-title" id="music-card2-title"></h5>
                    <p class="card-text" id="music-card2-desc"></p>
                    <p class="card-text"><strong>Price:</strong> <span id="music-card2-price"></span></p>
                    <p class="card-text"><strong>Date:</strong> <span id="music-card2-date"></span></p>
                  </div>
                </a>
              </div>
          
              <!-- Card 3 -->
              <div class="col-12 col-md-4">
                <a href="event3.html" class="card shadow-sm">
                    <div class="favorite-heart">
                        <i class="fa-regular fa-heart"></i> <!-- Outlined heart initially -->
                      </div>
                  <img class="card-img-top" id="music-card3-img" alt="Music Event 3">
                  <div class="card-body">
                    <h5 class="card-title" id="music-card3-title"></h5>
                    <p class="card-text" id="music-card3-desc"></p>
                    <p class="card-text"><strong>Price:</strong> <span id="music-card3-price"></span></p>
                    <p class="card-text"><strong>Date:</strong> <span id="music-card3-date"></span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
  </section>
      
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
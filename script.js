function slider_carouselInit() {
    $('.owl-carousel.slider_carousel').owlCarousel({
        dots: false, 
        loop: true, // Enable infinite looping
        margin: 30, 
        stagePadding: 2, // Add padding around the stage
        autoplay: true, // Enable autoplay
        nav: true, // Enable navigation buttons
        navText: ["<i class='far fa-arrow-alt-circle-left'></i>", "<i class='far fa-arrow-alt-circle-right'></i>"], 
        autoplayTimeout: 3000, 
        autoplayHoverPause: true, // Pause autoplay on hover
        responsive: { // Define responsive behavior for different screen sizes
            0: { items: 1 }, // 1 item on small screens
            768: { items: 2 }, // 2 items on medium screens
            992: { items: 5 } // 5 items on larger screens
        }
    });
}
slider_carouselInit(); // Initialize the carousel


(function() {
    'use strict'
    
    // Login Form Validation
    var loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            if (!loginForm.checkValidity()) { // Check if the login form is valid
                event.preventDefault();
                event.stopPropagation();
            }
            loginForm.classList.add('was-validated'); // Add validation feedback class
        }, false);
    }

    // Registration Form Validation
    var registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            if (!registerForm.checkValidity()) { // Check if the registration form is valid
                event.preventDefault();
                event.stopPropagation();
            }

            // Check password and confirm password
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
    
            if (password !== confirmPassword) {
                event.preventDefault();  // Prevent form submission
                document.getElementById('confirmPassword').classList.add('is-invalid');  // Add invalid feedback
                document.getElementById('confirmPassword').nextElementSibling.textContent = 'Passwords must match.';  // Update feedback message
            }
            
            // Add validation feedback class for registration form
            registerForm.classList.add('was-validated'); 
        }, false);
    }
})();




// Simple CAPTCHA validation 
document.getElementById("loginForm").addEventListener("submit", function(event) {
    const captchaInput = document.getElementById("captcha"); 
    const captchaText = document.getElementById("captchaText").innerText; // Get generated CAPTCHA text

    if (captchaInput.value !== captchaText) { 
        event.preventDefault(); 
        captchaInput.classList.add("is-invalid"); // Add error class to CAPTCHA input
    }
});


// Fetch and parse the XML file
// Fetch and parse the XML file

fetch('data/nightclub.xml')
.then((response) => {
    console.log('Response received:', response);
    return response.text();
  })

.then((xmlText) => {
  console.log('XML loaded:', xmlText);  // Log the raw XML to ensure it's being loaded
  const parser = new DOMParser();
  const xmlDoc = parser.parseFromString(xmlText, 'text/xml');
  console.log('XML parsed:', xmlDoc);  // Log the parsed XML to see if it's correct
  
  const events = xmlDoc.getElementsByTagName('event');
  const container = document.querySelector('.row.g-4');
  // Loop through events to create cards (your existing code)
  let cardsHTML = ''; // Initialize a string to hold the cards

  // Loop through each event and generate a card
  for (let i = 0; i < events.length; i++) {
    const name = events[i].getElementsByTagName('name')[0].textContent;
    const venue = events[i].getElementsByTagName('venue')[0].textContent;
    const price = events[i].getElementsByTagName('price')[0].textContent;
    const datetime = events[i].getElementsByTagName('datetime')[0].textContent;
    const image = events[i].getElementsByTagName('image')[0].textContent;

    // Create the card HTML
    const cardHTML = `
      <div class="col-12 col-md-4 mb-5">
        <div class="card shadow-sm">
          <img src="${image}" class="card-img-top" alt="${name}">
          <div class="card-body">
            <h5 class="card-title">${name}</h5>
            <p class="card-text"><strong>Venue:</strong> ${venue}</p>
            <p class="card-text"><strong>Date/Time:</strong> ${datetime}</p>
            <p class="card-text"><strong>Price:</strong> ${price}</p>
          </div>
        </div>
      </div>
    `;

    // Append the card to the cardsHTML string
    cardsHTML += cardHTML;
  }

  // Update the container with all the cards at once
  container.innerHTML = cardsHTML;
})


.catch((error) => {
  console.error('Error fetching XML:', error);
});




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




/* Simple CAPTCHA validation 
document.getElementById("loginForm").addEventListener("submit", function(event) {
    const captchaInput = document.getElementById("captcha"); 
    const captchaText = document.getElementById("captchaText").innerText; // Get generated CAPTCHA text

    if (captchaInput.value !== captchaText) { 
        event.preventDefault(); 
        captchaInput.classList.add("is-invalid"); // Add error class to CAPTCHA input
    }
});*/




document.addEventListener("DOMContentLoaded", function () {
    const hearts = document.querySelectorAll(".favorite-heart");
  
    hearts.forEach((heart) => {
      heart.addEventListener("click", function (event) {
        event.stopPropagation(); // Prevents card click
        event.preventDefault();  // Stops default link behavior if inside <a>
  
        this.classList.toggle("active");
        const icon = this.querySelector("i");
  
        if (this.classList.contains("active")) {
          icon.classList.remove("fa-regular");
          icon.classList.add("fa-solid"); // Solid heart
        } else {
          icon.classList.remove("fa-solid");
          icon.classList.add("fa-regular"); // Outline heart
        }
  
        // Placeholder event (replace this later)
        console.log("Favorite toggled!");
      });
    });
  });


  document.querySelectorAll(".event-card").forEach(card => {
    card.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        
        // Get event details from the card
        const title = this.getAttribute("data-title");
        const date = this.getAttribute("data-date");
        const description = this.getAttribute("data-description");
        const price = this.getAttribute("data-price");

        // Store data in sessionStorage
        sessionStorage.setItem("eventTitle", title);
        sessionStorage.setItem("eventDate", date);
        sessionStorage.setItem("eventDescription", description);
        sessionStorage.setItem("eventPrice", price);

        // Redirect to the event details page
        window.location.href = "profile.html";
    });
});
  
// Fetch and parse the XML file
// Fetch and parse the XML file
// Wait for the DOM to load

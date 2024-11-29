//Owl carousel js
function slider_carouselInit() {
    $('.owl-carousel.slider_carousel').owlCarousel({
        dots: false,
        loop: true,
        margin: 30,
        stagePadding: 2,
        autoplay: false,
        nav: true,
        navText: ["<i class='far fa-arrow-alt-circle-left'></i>","<i class='far fa-arrow-alt-circle-right'></i>"],
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            992: {
                items: 5
            }
        }
    });
}
slider_carouselInit();

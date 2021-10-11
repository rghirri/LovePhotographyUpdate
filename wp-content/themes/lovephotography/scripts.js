jQuery( document ).ready(function( $ ) {
    
  $("#owl-demo-sponsors").owlCarousel({
    pagination: false,
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    items: 6,
    responsive: {
      0: {
        items: 3
      },
      700: {
        items: 5
      },
      1000: {
        items: 6
      }
    },
    autoPlay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true
  });

  $("#owl-demo-review").owlCarousel({
    slideSpeed: 300,
    paginationSpeed: 400,
    pagination: false,
    navigation: true, // Show next and prev buttons
    navigationText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    items: 1,
    itemsDesktop: false,
    itemsDesktopSmall: false,
    itemsTablet: false,
    itemsMobile: false
  });
  
  
});

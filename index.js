$(document).ready(function () {
  $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
  });

  //top sales owl carousel
  $("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true, // ✅ Enables Next/Prev buttons
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>",
    ], // ✅ Custom FontAwesome icons
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      600: { items: 3 },
      1000: { items: 5 },
    },
  });
});

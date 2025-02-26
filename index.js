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
    ],
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

  //filter
  var $grid = $(".grid").isotope({
    itemSelector: ".grid-item",
    layoutMode: "fitRows",
  });

  $("#filters").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });

    // ✅ Add active class to clicked button
    $("#filters button").removeClass("is-checked");
    $(this).addClass("is-checked");
  });

  //new phones owl carousel
  $("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true, // ✅ Enables Next/Prev buttons
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>",
    ],
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

  //blogs owl carousel
  $("#blogs .owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      600: { items: 3 },
    },
  });

  //product qty button
  let qty_up = $(".qty .qty-up");
  let qty_down = $(".qty .qty-down");
  let $input = $(".qty .qty-input");

  //click event on qty up button
  qty_up.click(function (e) {
    if ($input.val() >= 1 && $input.val() <= 9) {
      $input.val(function (i, oldval) {
        return ++oldval;
      });
    }
  });

  //click event on qty down button
  qty_down.click(function (e) {
    if ($input.val() > 1 && $input.val() <= 10) {
      $input.val(function (i, oldval) {
        return --oldval;
      });
    }
  });
});

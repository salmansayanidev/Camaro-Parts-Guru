// menu js

$(".menu-btn").on("click", function () {
  $(".navigation").addClass("active");
});
$(".menu-cls-btn").on("click", function () {
  $(".navigation").removeClass("active");
});

// banner js

$(".bnner-slider-area").slick({
  dots: false,
  infinite: true,
  arrows: true,
  speed: 500,
  autoplay: true,
  autoplayspeed: 2000,
  slidesToShow: 1,
  nextArrow: ".bnner-slider-btn.next",
  prevArrow: ".bnner-slider-btn.pre",
});


// pro filter button

$(".pro-filter-btn").on("click" , function() {
  $(".pro-siderbar-area").addClass("active");
}); 

$(".filter-cls-btn").on("click" , function() {
  $(".pro-siderbar-area").removeClass("active");
}); 
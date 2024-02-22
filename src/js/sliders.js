jQuery(document).ready(function () {
  var $slider = jQuery(".slider");
  var $progressBar = jQuery(".progress");
  var $progressBarLabel = jQuery(".slider__label");

  $slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    var calc = (nextSlide / (slick.slideCount - 1)) * 100;

    $progressBar
      .css("background-size", calc + "% 100%")
      .attr("aria-valuenow", calc);

    $progressBarLabel.text(calc + "% completed");
  });

  $slider.slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 400,
    prevArrow: document.getElementById("js-prev-button"),
    nextArrow: document.getElementById("js-next-button"),
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
});



function stickyHeader() {
  jQuery(window).scroll(function() {  
    if (jQuery(this).scrollTop() > 20) {    
        jQuery('header').addClass("sticky");  
      } else {  
        jQuery('header').removeClass("sticky");  
      }  
    }); 
} 


function initializeSlider(
  sliderSelector,
  progressBarSelector,
  progressBarLabelSelector,
  arrowSelectors,
  slidesToShow
) {
  const $slider = jQuery(sliderSelector);
  const $progressBar = jQuery(progressBarSelector);
  const $progressBarLabel = jQuery(progressBarLabelSelector);

  $slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    const calc = (nextSlide / (slick.slideCount - 1)) * 100;
    if(calc > 0){
      jQuery(`#${arrowSelectors.prev}`).removeClass("disabled");
      jQuery(`#${arrowSelectors.prev}`).attr("disabled", false);


      if(calc === 100){
        jQuery(`#${arrowSelectors.next}`).addClass("disabled");
        jQuery(`#${arrowSelectors.next}`).attr("disabled", true);
      }else{
        jQuery(`#${arrowSelectors.next}`).attr("disabled", false);
        jQuery(`#${arrowSelectors.next}`).removeClass("disabled");
      }
    }
    else{
      jQuery(`#${arrowSelectors.prev}`).addClass("disabled");
      jQuery(`#${arrowSelectors.prev}`).attr("disabled", true);

    }
    $progressBar
      .css("background-size", calc + "% 100%")
      .attr("aria-valuenow", calc);

    $progressBarLabel.text(calc + "% completed");
  });
  $slider.slick({
    speed: 400,
    prevArrow: document.getElementById(arrowSelectors.prev),
    nextArrow: document.getElementById(arrowSelectors.next),
    slidesToShow: slidesToShow,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
}
  
function initializeDotsSlider(sliderSelector, slidesToShow) {
  const $slider = jQuery(sliderSelector);

  $slider.slick({
    speed: 400,
    prevArrow: document.getElementById("js-prev-button-dots"),
    nextArrow: document.getElementById("js-next-button-dots"),
    slidesToShow: slidesToShow,
    dots: true,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  toggleSlickDotsArrows()

  $slider.on("afterChange", function (event, slick, currentSlide, nextSlide) {
    toggleSlickDotsArrows();
  });

}

function toggleSlickDotsArrows(){
  const slickDots = document.querySelector(".slick-dots");
    
      if(slickDots.children[0].className === "slick-active"){
        jQuery("#js-prev-button-dots").hide();
        jQuery(".slider-dots__buttons").css("justify-content", "flex-end");
      }else if(slickDots.children[0].className !== "slick-active"){
        jQuery("#js-prev-button-dots").show();
        jQuery(".slider-dots__buttons").css("justify-content", "space-between");

      }
      if(slickDots.children[3].className === "slick-active" ){
        jQuery("#js-next-button-dots").hide();
      }else if(slickDots.children[3].className !== "slick-active"){
        jQuery("#js-next-button-dots").show();
      } 
  
}
  
// Usage
jQuery(document).ready(function () {
  initializeSlider(
    ".slider",
    ".progress",
    ".slider__label",
    { prev: "js-prev-button", next: "js-next-button" },
    3
  );
  initializeSlider(
    ".slider1",
    ".progress1",
    ".slider__label1",
    { prev: "js-prev-button1", next: "js-next-button1" },
    4
  );
  initializeSlider(
    ".slider2",
    ".progress2",
    ".slider__label2",
    { prev: "js-prev-button2", next: "js-next-button2" },
    3
  );
  initializeSlider(
    ".slider3",
    ".progress3",
    ".slider__label3",
    { prev: "js-prev-button3", next: "js-next-button3" },
    4
  );
  initializeDotsSlider(".slider-dots", 4);
  stickyHeader();
});
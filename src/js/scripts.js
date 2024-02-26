

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
  slidesToShow,
  tag
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

  const breakPoints = {
    bestSellers:[
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    }],
    goodTime:[
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
    }],
    moreWays:[
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      }],
    whatEveryone:[{
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
  }]
  }

  $slider.slick({
    speed: 400,
    prevArrow: document.getElementById(arrowSelectors.prev),
    nextArrow: document.getElementById(arrowSelectors.next),
    slidesToShow: slidesToShow,
    slidesToScroll: 1,
    responsive: breakPoints[tag],
  });
}

function initializeCarousel(sliderSelector) {
  const $slider = jQuery(sliderSelector);
  $slider.slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    speed: 400,
    slidesToShow: 7,
    slidesToScroll: 1,
    variableWidth: true,
    adaptiveHeight: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    swipeToSlide: false,
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
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
    }
    ],
  });

}

function initializeCategorySlider(sliderSelector) {
  const $slider = jQuery(sliderSelector);
  $slider.slick({
    speed: 400,
    dots: false,
    prevArrow: false,
    nextArrow: false,
    slidesToShow: 4.5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
    ],
  });
}

function menuMobile() {
  jQuery(".js-menu-mobile__open").click(function (e) {
    e.preventDefault();
    jQuery(".js-menu-mobile__list").addClass("open");
  });
  jQuery(".js-menu-mobile__close").click(function (e) {
    e.preventDefault();
    jQuery(".js-menu-mobile__list").removeClass("open");
  });
}
  
// Usage
jQuery(document).ready(function () {
  initializeSlider(
    ".slider",
    ".progress",
    ".slider__label",
    { prev: "js-prev-button", next: "js-next-button" },
    3,
    'bestSellers'
  );
  initializeSlider(
    ".slider1",
    ".progress1",
    ".slider__label1",
    { prev: "js-prev-button1", next: "js-next-button1" },
    4,
    'goodTime'
  );
  initializeSlider(
    ".slider2",
    ".progress2",
    ".slider__label2",
    { prev: "js-prev-button2", next: "js-next-button2" },
    3,
    'moreWays'
  );
  initializeSlider(
    ".slider3",
    ".progress3",
    ".slider__label3",
    { prev: "js-prev-button3", next: "js-next-button3" },
    4,
    'whatEveryone'
  );
  initializeDotsSlider(".slider-dots", 4);
  initializeCategorySlider(".slider-category");

  initializeCarousel('.js-media-testimonials')

  stickyHeader();
  menuMobile();


// Code
let e = jQuery("#js-header");
jQuery("#js-toggle-menu").on("click", function (t) {
  console.log("click in mobile ");
  jQuery("html, body").toggleClass("is-locked"), jQuery(t.currentTarget).toggleClass("is-open"), jQuery("#js-menu").toggleClass("is-shown"), e.toggleClass("is-open"), e.removeClass("is-fixed");
});



});
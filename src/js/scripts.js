jQuery(document).ready(function() {

    // Slick slider
    const loadSlick = () => {
      let $slider = jQuery('.slider');
      let $progressBar = jQuery('.progress');
      let $progressBarLabel = jQuery( '.slider__label' );
      
      $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
        let calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
        
        $progressBar
          .css('background-size', calc + '% 100%')
          .attr('aria-valuenow', calc );
        
        $progressBarLabel.text( calc + '% completed' );
      });
      
      $slider.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 400,
        prevArrow: document.getElementById('js-prev-button'),
        nextArrow: document.getElementById('js-next-button')
      }); 
    }
    
    const stickyHeader = () => {
      jQuery(window).scroll(function() {  
        if (jQuery(this).scrollTop() > 20) {    
            jQuery('header').addClass("sticky");  
          } else {  
            jQuery('header').removeClass("sticky");  
          }  
        }); 
    }   

    loadSlick();
    stickyHeader();

  });
<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="hero">
    <div class="hero__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/nowadays-hero-img.png')">
        <div class="hero__image-info">
            <h2>Drink<br>Nowadays</h2>
            <p>Cannabis in a Bottle</p>
            <a class='btn btn__beige--big' href="#"><?php ?></a>
        </div>
    </div>
    <div class="hero__video" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/nowadays-hero-video.png')"></div>
</div>
<div class="icons">
    <div class="slider-dots">
        <div class="icons__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/quick.svg'" alt="icons">
            <p>Quick<br>Onset time</p>
        </div>
        <div class="icons__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bye.svg'" alt="icons">
            <p>Bye Bye<br>Hangover</p>
        </div>
        <div class="icons__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/drink.svg'" alt="icons">
            <p>Drink With
                <br>
                Friends</p>
        </div>
        <div class="icons__icon">
            <img class="icons__shipping" src="<?php echo get_template_directory_uri(); ?>/img/shipping.svg'">
            <p>Shipping To<br>Your Door</p>
        </div>
    </div>
    <div class="slider-dots__buttons">
        <button id="js-prev-button-dots" class="slider-dots__buttons--left"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
        <button id="js-next-button-dots" class="slider-dots__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left"> </button>
    </div>
</div>
<div class="animated-text">
    <div class="animated-text__container">
        <p>
            <span>DON’T DRINK HARD.</span>
            DRINK EASY.
        </p>
        <p>
            <span>DON’T DRINK HARD.</span>
            DRINK EASY.
        </p>
        <p>
            <span>DON’T DRINK HARD.</span>
            DRINK EASY.
        </p>
        <p>
            <span>DON’T DRINK HARD.</span>
            DRINK EASY.
        </p>
        <p>
            <span>DON’T DRINK HARD.</span>
            DRINK EASY.
        </p>
        <p>
            <span>DON’T DRINK HARD.</span>
            DRINK EASY.
        </p>
        <p>
            <span>DON’T DRINK HARD.</span>
            DRINK EASY.
        </p>
        </div>
</div>
<section class="best-sellers">
    <div class="container">
        <div class="best-sellers__head">
            <h2 class="best-sellers__title">Shop Nowadays Best Sellers</h2>
            <p class="best-sellers__description">Bright. Buzzy. Balanced</p>
        </div>
        <div class="best-sellers__products slider">
            <div class="bs-product">
                <div class="bs-product__image bs-product__one">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Nowadays_micro_dose.webp'">
                </div>
                <div class="bs-product__info">
                    <h2 class="bs-product__title">Nowadays micro dose</h2>
                    <div class="bs-product__reviews">
                        <input type="radio" id="star5" name="rating" value="5"/>
                        <label for="star5">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4"/>
                        <label for="star4">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3"/>
                        <label for="star3">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2"/>
                        <label for="star2">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1"/>
                        <label for="star1">&#9733;</label>
                    </div>
                    <span>67 reviews</span>
                    <p class="bs-product__description">2mg thc drink</p>
                    <p class="bs-product__bottle">750 ml/33mg per bottle</p>
                    <p class="bs-product__price">$39.99</p>
                    <a href="#" class=" btn btn__beige--small">shop now</a>
                </div>
            </div>
            <div class="bs-product">
                <div class="bs-product__image bs-product__two">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Nowadays_micro_dose.webp'">
                </div>
                <div class="bs-product__info">
                    <h2 class="bs-product__title ">Nowadays low dose</h2>
                    <div class="bs-product__reviews">
                        <input type="radio" id="star10" name="rating1" value="5"/>
                        <label for="star10">&#9733;</label>
                        <input type="radio" id="star9" name="rating1" value="4"/>
                        <label for="star9">&#9733;</label>
                        <input type="radio" id="star8" name="rating1" value="3"/>
                        <label for="star8">&#9733;</label>
                        <input type="radio" id="star7" name="rating1" value="2"/>
                        <label for="star7">&#9733;</label>
                        <input type="radio" id="star6" name="rating1" value="1"/>
                        <label for="star6">&#9733;</label>
                    </div>
                    <span>87 reviews</span>
                    <p class="bs-product__description">6mg thc drink</p>
                    <p class="bs-product__bottle">750 ml/100mg per bottle</p>
                    <p class="bs-product__price">$59.99</p>
                    <a href="#" class=" btn btn__beige--small">shop now</a>
                </div>
            </div>
            <div class="bs-product">
                <div class="bs-product__image bs-product__three">
                    <img class="bs-product__img" src="<?php echo get_template_directory_uri(); ?>/img/Nowadays_micro_dose.webp'">
                </div>
                <div class="bs-product__info">
                    <h2 class="bs-product__title ">Nowadays high dose</h2>
                    <div class="bs-product__reviews">
                        <input type="radio" id="star16" name="rating3" value="5"/>
                        <label for="star16">&#9733;</label>
                        <input type="radio" id="star15" name="rating3" value="4"/>
                        <label for="star15">&#9733;</label>
                        <input type="radio" id="star14" name="rating3" value="3"/>
                        <label for="star14">&#9733;</label>
                        <input type="radio" id="star12" name="rating3" value="2"/>
                        <label for="star12">&#9733;</label>
                        <input type="radio" id="star11" name="rating3" value="1"/>
                        <label for="star11">&#9733;</label>
                    </div>
                    <span>98 reviews</span>
                    <p class="bs-product__description">10mg thc drink</p>
                    <p class="bs-product__bottle">750 ml/166mg per bottle</p>
                    <p class="bs-product__price">$79.99</p>
                    <a href="#" class=" btn btn__beige--small">shop now</a>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            </div>
            <div class="scroll-indicator__buttons">
                <button id="js-prev-button" class="scroll-indicator__buttons--left disabled"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left" /> </button>
                <button id="js-next-button" class="scroll-indicator__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
            </div>
        </div>
    </div>
</section>
<div class="shop-all">
    <a href="#" class=" btn btn__white--small">Shop all</a>
</div>
<section class="media-testimonials-container">
    <h2>NOWADAYS IN THE PRESS</h2>
    <div class="media-testimonials">
        <div class="media-testimonials__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-24-6.svg'}}" alt="Press 1" />
            <p>"Nowadays is the first nationally avaialble cannabis infused-spirint."</p>
        </div>
        <div class="media-testimonials__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-24-4-2.svg'}}" alt="Press 2" />
            <p>"Nowadays is the first nationally avaialble cannabis infused-spirint."</p>
        </div>
        <div class="media-testimonials__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-24-3-2.svg'}}" alt="Press 3" />
            <p>"Nowadays is the first nationally avaialble cannabis infused-spirint."</p>
        </div>
        <div class="media-testimonials__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-24-2-2.svg' }}" alt="Press 4" />
            <p>"Nowadays is the first nationally avaialble cannabis infused-spirint."</p>
        </div>
        <div class="media-testimonials__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-24-1-2.svg'}}" alt="Press 5" />
            <p>"Nowadays is the first nationally avaialble cannabis infused-spirint."</p>
        </div>
    </div>
</section>
<section class="good-time-section">
    <div class="container">
        <h2>A GOOD TIME IN NO TIME</h2>
        <p class="good-time-section__subtitle">Unwind. Unplift.</p>
        <div class="good-time-section__products slider1">
            <div class="good-time-section-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <p class="good-time-section-product__card--name">Classic hat</p>
                <p class="good-time-section-product__card--price">$20.00</p>
                <button class="good-time-section-product__card--button">SHOP NOW</button>
            </div>
            <div class="good-time-section-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <p class="good-time-section-product__card--name">Classic hat</p>
                <p class="good-time-section-product__card--price">$20.00</p>
                <button class="good-time-section-product__card--button">SHOP NOW</button>
            </div>
            <div class="good-time-section-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <p class="good-time-section-product__card--name">Classic hat</p>
                <p class="good-time-section-product__card--price">$20.00</p>
                <button class="good-time-section-product__card--button">SHOP NOW</button>
            </div>
            <div class="good-time-section-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <p class="good-time-section-product__card--name">Classic hat</p>
                <p class="good-time-section-product__card--price">$20.00</p>
                <button class="good-time-section-product__card--button">SHOP NOW</button>
            </div>
            <div class="good-time-section-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <p class="good-time-section-product__card--name">Classic hat</p>
                <p class="good-time-section-product__card--price">$20.00</p>
                <button class="good-time-section-product__card--button">SHOP NOW</button>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="progress1" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            </div>
            <div class="scroll-indicator__buttons">
                <button id="js-prev-button1" class="scroll-indicator__buttons--left disabled"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left" /> </button>
                <button id="js-next-button1" class="scroll-indicator__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
            </div>
        </div>
        <div class="good-time-section__button-container">
            <button class="good-time-section__button-container--shop-all">SHOP ALL</button>
        </div>
    </div>
</section>
<section class="more-ways-section">
    <div class="container">
        <div class="more-ways-section__content">
            <div class="more-ways-section__info">
                <h2>MORE WAYS TO ENJOY<br>
                    NOWADAYS</h2>
                <p class="more-ways-section__subtitle">Drinks with THC.</p>
            </div>
            <div class="more-ways-section__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/nowadays-rotate.png'" alt="img">
            </div>

        </div>
        <div class="more-ways-section__products slider2">
            <div class="more-ways-section__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways-section__card--name">PUCKER UP</p>
                <p class="more-ways-section__card--description">Just enough tartness to keep you coming back for more</p>
                <button class="more-ways-section__card--button">VIEW MORE</button>
            </div>
            <div class="more-ways-section__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways-section__card--name">PUCKER UP</p>
                <p class="more-ways-section__card--description">Just enough tartness to keep you coming back for more</p>
                <button class="more-ways-section__card--button">VIEW MORE</button>
            </div>
            <div class="more-ways-section__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways-section__card--name">PUCKER UP</p>
                <p class="more-ways-section__card--description">Just enough tartness to keep you coming back for more</p>
                <button class="more-ways-section__card--button">VIEW MORE</button>
            </div>
            <div class="more-ways-section__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways-section__card--name">PUCKER UP</p>
                <p class="more-ways-section__card--description">Just enough tartness to keep you coming back for more</p>
                <button class="more-ways-section__card--button">VIEW MORE</button>
            </div>
            <div class="more-ways-section__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways-section__card--name">PUCKER UP</p>
                <p class="more-ways-section__card--description">Just enough tartness to keep you coming back for more</p>
                <button class="more-ways-section__card--button">VIEW MORE</button>
            </div>
            <div class="more-ways-section__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways-section__card--name">PUCKER UP</p>
                <p class="more-ways-section__card--description">Just enough tartness to keep you coming back for more</p>
                <button class="more-ways-section__card--button">VIEW MORE</button>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="progress2" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            </div>
            <div class="scroll-indicator__buttons">
                <button id="js-prev-button2" class="scroll-indicator__buttons--left disabled"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left" /> </button>
                <button id="js-next-button2" class="scroll-indicator__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
            </div>
        </div>
        <div class="more-ways-section__button-container">
            <button class="more-ways-section__button-container--submit">TRY THEM NOW</button>
        </div>
    </div>
</section>
<section class="what-everyone-section">
    <div class="container">
        <h2>WHAT EVERYONE IS SAYING</h2>
        <div class="what-everyone-section__video-list slider3">
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/ssstik.io_1708112788862.mp4' }}" type="video/mp4">
                </video>    
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="progress3" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            </div>
            <div class="scroll-indicator__buttons">
                <button id="js-prev-button3" class="scroll-indicator__buttons--left disabled"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left" /> </button>
                <button id="js-next-button3" class="scroll-indicator__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
            </div>
        </div>
        <div class="what-everyone-section__buttons-container">
            <button class="what-everyone-section__buttons-container--button">FOLLOW OUR INSTAGRAM</button>
            <button class="what-everyone-section__buttons-container--button">FOLLOW OUR TIKTOK</button>
        </div>
    </div>
</section>
<div class="have-questions">
    <hr class="have-questions__line--top">
    <div class="container">
        <div class="have-questions__content">
            <h3>HAVE<br>
                QUESTIONS?</h3>

            <div class="have-questions__accordion">
                <details>
                    <summary>THC? What’s the hype?</summary>
                    <p>Lorem ipsum dolor sit amet.</p>
                </details>
                <details>
                    <summary>Does it taste like Weed?</summary>
                    <p>Lorem ipsum dolor sit amet.</p>
                </details>
                <details>
                    <summary>How Many Can I Drink?</summary>
                    <p>Lorem ipsum dolor sit amet.</p>
                </details>
                <details>
                    <summary>Where Can I Find Nowadays?</summary>
                    <p>Lorem ipsum dolor sit amet.</p>
                </details>

            </div>
        </div>


    </div>
    <hr class="have-questions__line--bottom">
</div>
<section class="wrap-reviews-section">
    <div class="reviews-section">
        <div class="reviews-section__card">
            <div class="starts-group">
                <input type="radio" id="star5" name="rating" value="5"/>
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"/>
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"/>
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"/>
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"/>
                <label for="star1">&#9733;</label>
            </div>
            <p class="reviews-section__card--description">“Smooth taste, subtle high”</p>
            <p class="reviews-section__card--name">Manuel Caride</p>
        </div>
        <div class="reviews-section__card">
            <div class="starts-group">
                <input type="radio" id="star5" name="rating" value="5"/>
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"/>
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"/>
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"/>
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"/>
                <label for="star1">&#9733;</label>
            </div>
            <p class="reviews-section__card--description">“Smooth taste, subtle high”</p>
            <p class="reviews-section__card--name">Manuel Caride</p>
        </div>
        <div class="reviews-section__card">
            <div class="starts-group">
                <input type="radio" id="star5" name="rating" value="5"/>
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"/>
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"/>
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"/>
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"/>
                <label for="star1">&#9733;</label>
            </div>
            <p class="reviews-section__card--description">“Smooth taste, subtle high”</p>
            <p class="reviews-section__card--name">Manuel Caride</p>
        </div>
        <div class="reviews-section__card">
            <div class="starts-group">
                <input type="radio" id="star5" name="rating" value="5"/>
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"/>
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"/>
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"/>
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"/>
                <label for="star1">&#9733;</label>
            </div>
            <p class="reviews-section__card--description">“Smooth taste, subtle high”</p>
            <p class="reviews-section__card--name">Manuel Caride</p>
        </div>
        <div class="reviews-section__card">
            <div class="starts-group">
                <input type="radio" id="star5" name="rating" value="5"/>
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"/>
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"/>
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"/>
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"/>
                <label for="star1">&#9733;</label>
            </div>
            <p class="reviews-section__card--description">“Smooth taste, subtle high”</p>
            <p class="reviews-section__card--name">Manuel Caride</p>
        </div>
        <div class="reviews-section__card">
            <div class="starts-group">
                <input type="radio" id="star5" name="rating" value="5"/>
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"/>
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"/>
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"/>
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"/>
                <label for="star1">&#9733;</label>
            </div>
            <p class="reviews-section__card--description">“Smooth taste, subtle high”</p>
            <p class="reviews-section__card--name">Manuel Caride</p>
        </div>
    </div>    
</section>
<section class="subscribe-save">
        <img class="subscribe-save__main-image" src="<?php echo get_template_directory_uri(); ?>/img/IG_May-2023_Nowadays_Shot-3-1.png'}}" />
        <div class="subscribe-save__text-container">
            <img class="subscribe-save__text-container--img" src="<?php echo get_template_directory_uri(); ?>/img/Capa_1.png' }}" />
            <p class="subscribe-save__text-container--subscribe">SUBSCRIBE</p>
            <p class="subscribe-save__text-container--andsave">AND SAVE</p>
            <div class="subscribe-save__text-container--description">
                <p class="subscribe-save__description--title">Subscribers-only perks!</p>
                <p class="subscribe-save__description--subtitle">Access exclusive promotions.</p>
            </div>
            <div class="subscribe-save__text-container--grid">
                <div class="grid-point">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-58.png' }}" />
                    <p>up to 15% off</p>
                </div>
                <div class="grid-point">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-58.png' }}" />
                    <p>Free shipping</p>
                </div>
                <div class="grid-point">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-58.png' }}" />
                    <p>cancel any time</p>
                </div>
                <div class="grid-point">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-58.png' }}" />
                    <p>Early product access</p>
                </div>
                <div class="grid-point">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Frame-58.png' }}" />
                    <p>Exclusive merch discounts</p>
                </div>
            </div>
            <div class="subscribe-save__text-container--action">
                <div class="group">      
                    <input type="text" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email Address</label>
                  </div>
                <button class="action-button">SUBSCRIBE & SAVE</button>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
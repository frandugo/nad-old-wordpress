<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<section class="home-mobile-categories slider-category">
    <div class="category">
        <div class="category__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/category.jpg'">
        </div>
        <h3>Best Sellers</h3>
    </div>
    <div class="category">
        <div class="category__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/category.jpg'">
        </div>
        <h3>Best Sellers</h3>
    </div>
    <div class="category">
        <div class="category__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/category.jpg'">
        </div>
        <h3>Best Sellers</h3>
    </div>
    <div class="category">
        <div class="category__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/category.jpg'">
        </div>
        <h3>Best Sellers</h3>
    </div>
    <div class="category">
        <div class="category__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/category.jpg'">
        </div>
        <h3>Best Sellers</h3>
    </div>
</section>
<div class="hero">
    <div class="hero__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/nowadays-hero-img.png')">
        <div class="hero__image-info">
            <h2><?php the_field( 'hero_title' ); ?></h2>
            <p><?php the_field( 'hero_subtitle' ); ?></p>
            <a class='btn btn__beige btn__big btn__uppercase' href="<?php the_field( 'hero_button_link' ); ?>"><?php the_field( 'hero_button_text' ); ?></a>
        </div>
    </div>
    <div class="hero__video">
        <video autoplay muted loop>
            <source src="<?php the_field( 'hero_background_video' ); ?>" type="video/mp4">
        </video>
    </div>
</div>
<div class="icons">
<<<<<<< HEAD
    <div class="icons__container">
        <div class="slider-dots">
            <?php if ( have_rows( 'dots' ) ) : ?>
            <?php while ( have_rows( 'dots' ) ) : the_row(); ?>
                <div class="icons__icon">
                    <?php if ( get_sub_field( 'dot_image' ) ) : ?>
                        <img src="<?php the_sub_field( 'dot_image' ); ?>" />
                    <?php endif ?>
                    <p><?php the_sub_field( 'dot_text' ); ?></p>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
        <div class="slider-dots__buttons">
            <button id="js-prev-button-dots" class="slider-dots__buttons--left"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
            <button id="js-next-button-dots" class="slider-dots__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left"> </button>
        </div>
    </div>    
=======
    <div class="slider-dots">
        <?php if ( have_rows( 'dots' ) ) : ?>
        <?php while ( have_rows( 'dots' ) ) : the_row(); ?>
            <div class="icons__icon">
                <?php if ( get_sub_field( 'dot_image' ) ) : ?>
                    <img src="<?php the_sub_field( 'dot_image' ); ?>" />
                <?php endif ?>
                <p><?php the_sub_field( 'dot_text' ); ?></p>
            </div>
        <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
    <div class="slider-dots__buttons">
        <button id="js-prev-button-dots" class="slider-dots__buttons--left"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
        <button id="js-next-button-dots" class="slider-dots__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left"> </button>
    </div>
>>>>>>> 6b3e76460386f6528edb442652b1d762c987c5d5
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
            <h2 class="best-sellers__title title_sm">Shop Nowadays Best Sellers</h2>
            <p class="best-sellers__description">Bright. Buzzy. Balanced</p>
        </div>
<<<<<<< HEAD
        <div class="best-sellers__products slider"> 
        <?php $products = get_field( 'products' ); ?>

=======
        <div class="best-sellers__products slider">
        <?php $products = get_field( 'products' ); ?>
>>>>>>> 6b3e76460386f6528edb442652b1d762c987c5d5
        <?php if ( $products ) : ?>
            <?php foreach ( $products as $post ) : ?>
                <?php setup_postdata ( $post ); ?>
                <div class="bs-product">
                    <div class="bs-product__image bs-product__one">
<<<<<<< HEAD
                    <img src="<?php echo $image; ?>">
                        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/Nowadays_micro_dose.webp'">-->
                    <?php 
                        $sale = get_post_meta( $post->ID, '_sale_price', true);
                        $thumbnail_id = get_post_meta($post->ID);
                        print_r($sale);
                    ?>    

=======
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Nowadays_micro_dose.webp'">
                    </div>
                    <div class="bs-product__info">
                        <h2 class="bs-product__title"><?php the_title(); ?></h2>
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
                        <span class="bs-product__span">67 reviews</span>
                        <p class="bs-product__description">2mg thc drink</p>
                        <p class="bs-product__bottle">750 ml/33mg per bottle</p>
                        <p class="bs-product__price">$39.99</p>
                        <a href="<?php the_permalink(); ?>" class="btn btn__beige btn__medium bt__full btn__transform">shop now</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
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
>>>>>>> 6b3e76460386f6528edb442652b1d762c987c5d5
                    </div>
                    <!--<div class="bs-product__info">
                        <h2 class="bs-product__title"><?php the_title(); ?></h2>
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
                        <span class="bs-product__span">67 reviews</span>
                        <p class="bs-product__description"><?php echo $getPost->post_content ?></p>
                        <p class="bs-product__bottle">750 ml/33mg per bottle</p>
                        <p class="bs-product__price">$60</p>
                        <a href="<?php the_permalink(); ?>" class="btn btn__beige btn__medium bt__full btn__transform">shop now</a>
                    </div>-->
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?> 
        
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
<section class="shop-all-button">
    <a href="#" class="btn btn__white btn__medium btn__w340 btn__uppercase">Shop all</a>
</section>
<section class="media-testimonials-container">
    <h2>Nowadays in the press</h2>
    <div class="media-testimonials js-media-testimonials">
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
<section class="good-time">
    <div class="container">
        <h2 class="good-time__title">A good time in no time</h2>
        <p class="good-time__subtitle">Unwind. Unplift.</p>
        <div class="good-time__products slider1">
            <div class="good-time-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <h2 class="good-time-product__title">Classic hat</h2>
                <p class="good-time-product__price">$20.00</p>
                <button class="btn btn__beige btn__medium btn__full btn__uppercase">Shop now</button>
            </div>
            <div class="good-time-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <h2 class="good-time-product__title">Classic hat</h2>
                <p class="good-time-product__price">$20.00</p>
                <button class="btn btn__beige btn__medium btn__full btn__uppercase">Shop now</button>
            </div>
            <div class="good-time-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <h2 class="good-time-product__title">Classic hat</h2>
                <p class="good-time-product__price">$20.00</p>
                <button class="btn btn__beige btn__medium btn__full btn__uppercase">Shop now</button>
            </div>
            <div class="good-time-product__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png' }}"/>
                <h2 class="good-time-product__title">Classic hat</h2>
                <p class="good-time-product__price">$20.00</p>
                <button class="btn btn__beige btn__medium btn__full btn__uppercase">Shop now</button>
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
        <section class="shop-all-button">
            <a href="#" class="btn btn__white btn__medium btn__w340 btn__uppercase">Shop all</a>
        </section>
    </div>
</section>
<section class="more-ways">
    <div class="container">
        <div class="more-ways__head">
            <div class="more-ways__info">
                <h2 class="more-ways__title">More ways to enjoy<br> Nowdays</h2>
                <p class="more-ways__subtitle">Drinks with THC.</p>
            </div>
            <div class="more-ways__image">
                <img class="more-ways__animation-text" src="<?php echo get_template_directory_uri(); ?>/img/nowadays-animation-text.svg'" alt="img">
                <img class="more-ways__animation-icon" src="<?php echo get_template_directory_uri(); ?>/img/nowadays-animation-icon.svg'" alt="img">
            </div>
        </div>
        <div class="more-ways__products slider2">
            <div class="more-ways__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways__card-title">Pucker up</p>
                <p class="more-ways__card-description">Just enough tartness to keep you coming back for more</p>
                <!--<button class="btn btn__white btn__medium btn__uppercase">View more</button>-->
            </div>
            <div class="more-ways__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways__card-title">Pucker up</p>
                <p class="more-ways__card-description">Just enough tartness to keep you coming back for more</p>
                <!--<button class="btn btn__white btn__medium btn__uppercase">View more</button>-->
            </div>
            <div class="more-ways__card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Img.png'}}" />
                <p class="more-ways__card-title">Pucker up</p>
                <p class="more-ways__card-description">Just enough tartness to keep you coming back for more</p>
                <!--<button class="btn btn__white btn__medium btn__uppercase">View more</button>-->
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="progress progress2" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            </div>
            <div class="scroll-indicator__buttons">
                <button id="js-prev-button2" class="scroll-indicator__buttons--left disabled"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Left" /> </button>
                <button id="js-next-button2" class="scroll-indicator__buttons--right"> <img src="<?php echo get_template_directory_uri(); ?>/img/Vector-136.svg'}}" alt="Move Right"> </button>
            </div>
        </div>
        <div class="more-ways__button-container">
            <button class="btn btn__beige btn__medium btn__uppercase">Try them now</button>
        </div>
    </div>
</section>
<section class="what-everyone">
    <div class="container">
        <h2 class="what-everyone__title">What everyone is saying</h2>
        <div class="what-everyone__video-list slider3">
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/tiktok.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/tiktok.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/tiktok.mp4' }}" type="video/mp4">
                </video>    
            </div>
            <div class="what-everyone__card">
                <video autoplay muted width="286" height="545">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/tiktok.mp4' }}" type="video/mp4">
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
        <div class="what-everyone__buttons-container">
            <button class="btn btn__white btn__medium btn__uppercase">Follow our Instagram</button>
            <button class="btn btn__white btn__medium btn__uppercase">Follow our Tiktok</button>
        </div>
    </div>
</section>
<div class="have-questions">
    <hr class="have-questions__line--top" />
    <div class="container">
        <div class="have-questions__content">
            <h3>HAVE<br>
                QUESTIONS?</h3>
            <div class="have-questions__accordion">
                <details name="accordion">
                    <summary>THC? What’s the hype?</summary>
                    <p>THC is what gives you that perfect lift. A cannabinoid derived from marijuana or hemp, THC is the secret sauce that gives Nowadays it’s social buzz. Each shot (1.5oz) of Nowadays has 2mg. 6mg, or 10MG of THC to deliver a consistent, controllable high, every single time.</p>
                </details>
                <details name="accordion">
                    <summary>Does it taste like Weed?</summary>
                    <p>Natural fruit flavors, a crisp finish, and absolutely zero cannabis taste. Whether going out or staying in, Nowadays was created with a flavor to assimilate to any occasion.</p>
                </details>
                <details name="accordion">
                    <summary>How Many Can I Drink?</summary>
                    <p>Designed to replicate the strength of alcohol, we recommend beginners start with a single shot over ice or mix up one of our signature cocktails. Wait 15-30 minutes, and craft your experience from there.</p>
                </details>
                <details name="accordion">
                    <summary>Where Can I Find Nowadays?</summary>
                    <p>Nowadays can be ordered on our website and shipped directly to your door. The product is currently being rolled out to retailers across the country and we will be adding a Find Us page soon to find a store near you!</p>
                </details>

            </div>
        </div>
    </div>
    <hr class="have-questions__line--bottom" />
</div>
<section class="wrap-reviews">
    <div class="reviews">
    <?php if ( have_rows( 'reviews' ) ) : ?>
        <?php while ( have_rows( 'reviews' ) ) : the_row(); ?>
            <div class="reviews__card">
                <div class="starts-group">
                    <?php for ($x = 0; $x <= get_sub_field( 'stars' ); $x++) { ?>
                        <img class="bs-product__img" src="<?php echo get_template_directory_uri(); ?>/img/review-star.svg'">
                    <?php } ?>    
                </div>
                <p class="reviews__card-description">“<?php the_sub_field( 'description' ); ?>”</p>
                <p class="reviews__card-name"><?php the_sub_field( 'name' ); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // No rows found ?>
    <?php endif; ?>
    </div>    
</section>
<section class="subscribe-save">
    <div class="subscribe-save__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/IG_May-2023_Nowadays_Shot-3-1.png')">
    </div>    
    
    <div class="subscribe-save__text">
        <div class="subscribe-save__container">
            <img class="subscribe-save__text-icon" src="<?php echo get_template_directory_uri(); ?>/img/Capa_1.png' }}" />
            <h2 class="subscribe-save__text-title">Subscribe <br/><span>and save</span></h2>
            <div class="subscribe-save__text-paragraph">
                <p>Subscribers-only perks! <br/> Access exclusive promotions.</p>
            </div>
            <div class="subscribe-save__text-grid">
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
            <div class="subscribe-save__text-action">
                <div class="group">      
                    <input type="text" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email Address</label>
                    </div>
                <button class="btn btn__beige btn__medium btn__full btn__uppercase">Subscribe & save</button>
            </div>
        </div>
    </div>    
</section>
<?php get_footer(); ?>
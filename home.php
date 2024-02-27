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
</div>
<div class="animated-text">
    <div class="animated-text__container">
        <?php if ( have_rows( 'animated_texts' ) ) : ?>
            <?php while ( have_rows( 'animated_texts' ) ) : the_row(); ?>
                <p>
                    <?php the_sub_field( 'text' ); ?>
                </p>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>
<section class="best-sellers">
    <div class="container">
        <div class="best-sellers__head">
            <h2 class="best-sellers__title title_sm"><?php the_field( 'best_sellers_title' ); ?></h2>
            <p class="best-sellers__description"><?php the_field( 'best_sellers_subtitle' ); ?></p>
        </div>
        <div class="best-sellers__products slider"> 
            <?php $products = get_field( 'products' ); ?>
            <?php if ( $products ) : ?>
                <?php foreach ( $products as $post ) : ?>
                    <?php 
                        $product = wc_get_product($post->ID);
                        $product_permalink = $product->get_permalink();
                        $sku = $product->get_sku();
                        $product_name = $product->get_name();
                        $product_image = $product->get_featured();
                        $product_price = $product->get_price();

                        $product_reviews_count = $product->get_review_count();
                        $product_rating_count = $product->get_rating_count();
                        $product_rating = $product->get_average_rating();

                        $product_background = get_field( "product_background", $post->ID );
                    ?>
                    <div class="bs-product">
                        <div class="bs-product__image">
                            <?php $image = $product->get_image( array( 500, 500 ) , array('class' => 'bs-product__image-product')); ?>
                            <img class="bs-product__image-background" src="<?php echo $product_background; ?>" alt="" />
                            <?php echo $image; ?>
                        </div>
                        <div class="bs-product__info">
                            <h2 class="bs-product__title"><?php echo $product_name; ?></h2>
                            <div class="bs-product__reviews">
                            <?php echo "<h2>" . $product_rating_count . "<h2>"; ?>
                            <?php 
                            ?>
                            </div>
                            <span class="bs-product__span"><?php echo $product_reviews_count ?> reviews</span>
                            <p class="bs-product__description"></p>
                            <p class="bs-product__bottle">750 ml/33mg per bottle</p>
                            <p class="bs-product__price">$<?php echo $product_price; ?></p>
                            <a href="<?php echo $product_permalink; ?>" class="btn btn__beige btn__medium bt__full btn__transform">Shop now</a>
                        </div>
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
    <h2><?php  the_field( 'press_title' ); ?></h2>
    <div class="media-testimonials js-media-testimonials">
    <?php if ( have_rows( 'press_items' ) ) : ?>
        <?php while ( have_rows( 'press_items' ) ) : the_row(); ?>
            <?php if ( get_sub_field( 'image' ) ) : ?>
                <a class="media-testimonials__item" href="<?php the_sub_field( 'url' ); ?>">
                    <img src="<?php the_sub_field( 'image' ); ?>" />
                    <p><?php the_sub_field( 'text' ); ?></p>
                </a>
            <?php endif ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // No rows found ?>
    <?php endif; ?>
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
                <h2 class="more-ways__title"><?php the_field( 'more_ways_title' ); ?></h2>
                <p class="more-ways__subtitle"><?php the_field( 'more_ways_subtitle' ); ?></p>
            </div>
            <div class="more-ways__image">
                <img class="more-ways__animation-text" src="<?php echo get_template_directory_uri(); ?>/img/nowadays-animation-text.svg'" alt="img">
                <img class="more-ways__animation-icon" src="<?php echo get_template_directory_uri(); ?>/img/nowadays-animation-icon.svg'" alt="img">
            </div>
        </div>
        <div class="more-ways__products slider2">
            <?php if ( have_rows( 'more_ways_items' ) ) : ?>
                <?php while ( have_rows( 'more_ways_items' ) ) : the_row(); ?>
                    <div class="more-ways__card">
                        <div class="more-ways__card-image">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) : ?>
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            <?php endif; ?>
                            <div class="more-ways__card-image-overlay">
                                <a href="<?php the_sub_field( 'url' ); ?>" class="btn btn__border-white btn__medium btn__uppercase">View more</a>
                            </div>
                        </div> 
                        <p class="more-ways__card-title"><?php the_sub_field( 'title' ); ?></p>
                        <p class="more-ways__card-description"><?php the_sub_field( 'description' ); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
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
            <h3><?php the_field( 'questions_title' ); ?></h3>
            <div class="have-questions__accordion">
                <?php if ( have_rows( 'questions' ) ) : ?>
                    <?php while ( have_rows( 'questions' ) ) : the_row(); ?>
                        <details name="accordion">
                            <summary><?php the_sub_field( 'question' ); ?></summary>
                            <p><?php the_sub_field( 'answer' ); ?></p>
                        </details>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
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
<?php /* Template Name: plp */ ?>
<?php get_header(); ?>
<div class="plp-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/nowadays-hero-img.png')">
    <div class="container">
        <h2>A good time
            <br>in no time
        </h2>
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


<section class="shop-nowadays">
    <div class="container">
        <div class="shop-nowadays__head">
            <h2 class="shop-nowadays__title">SHOP NOWADAYS</h2>
        </div>
        <div class="shop-nowadays__products">
            <div class="sn-product">
                <div class="sn-product__image sn-product__one">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Nowadays_micro_dose.webp'">
                    <?php $background_product = get_field( 'background_product' ); ?>
                </div>
                <div class="sn-product__info">
                    <h2 class="sn-product__title">Nowadays micro dose</h2>
                    <div class="sn-product__reviews">
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
                    <span class="sn-product__span">67 reviews</span>
                    <p class="sn-product__description">2mg thc drink</p>
                    <p class="sn-product__bottle">750 ml/33mg per bottle</p>
                    <p class="sn-product__price">$39.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="sn-product">
                <div class="sn-product__image sn-product__two">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Nowadays_micro_dose.webp'">
                </div>
                <div class="sn-product__info">
                    <h2 class="sn-product__title ">Nowadays low dose</h2>
                    <div class="sn-product__reviews">
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
                    <span class="sn-product__span">87 reviews</span>
                    <p class="sn-product__description">6mg thc drink</p>
                    <p class="sn-product__bottle">750 ml/100mg per bottle</p>
                    <p class="sn-product__price">$59.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="sn-product">
                <div class="sn-product__image sn-product__three">
                    <img class="bs-product__img" src="<?php echo get_template_directory_uri(); ?>'/img/Nowadays_micro_dose.webp'">
                </div>
                <div class="sn-product__info">
                    <h2 class="sn-product__title ">Nowadays high dose</h2>
                    <div class="sn-product__reviews">
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
                    <span class="sn-product__span">98 reviews</span>
                    <p class="sn-product__description">10mg thc drink</p>
                    <p class="sn-product__bottle">750 ml/166mg per bottle</p>
                    <p class="sn-product__price">$79.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="sn-product">
                <div class="sn-product__image ">
                    <img class="sn-product__infocards" src="<?php echo get_template_directory_uri(); ?>/img/PLP_infoCards_1.png'">
                </div>
        </div>
        </div>
    </div>
</section>

<!--section merch-->
<section class="merch">
    <div class="container">
        <div class="merch__head">
            <h2 class="merch__title">Merch</h2>
            <select name="Sort by" class="merch__select">
                <option value="Sort By">Sort By</option>
                <option value="Classic Hat">Classic Hat</option>
                <option value="Drink Easy">Drink Easy</option>
                <option value="Drink Easy Hat">Drink Easy Hat</option>
</select>
        </div>
        <div class="merch__products ">
            <div class="merch-product merch-box1">
                <div class="merch-product__image ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/classic-hat.png'">
                    <?php $background_product = get_field( 'background_product' ); ?>
                </div>
                <div class="merch-product__info">
                    <h2 class="merch-product__title">Nowadays micro dose</h2>
                    <div class="merch-product__reviews">
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
                    <span class="merch-product__span">67 reviews</span>
                    <p class="merch-product__price">$39.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="merch-product merch-box2">
                <div class="merch-product__image ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/drink-easy.png'">
                </div>
                <div class="merch-product__info">
                    <h2 class="merch-product__title ">Nowadays low dose</h2>
                    <div class="merch-product__reviews">
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
                    <span class="merch-product__span">87 reviews</span>
                    <p class="merch-product__price">$59.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="merch-product merch-box3">
                <div class="merch-product__image ">
                    <img class="merch-product__img" src="<?php echo get_template_directory_uri(); ?>'/img/drink-easy-hat.png'">
                </div>
                <div class="merch-product__info">
                    <h2 class="merch-product__title ">Nowadays high dose</h2>
                    <div class="merch-product__reviews">
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
                    <span class="merch-product__span">98 reviews</span>
                    <p class="merch-product__price">$79.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="merch-product merch-box4">
                <div class="merch-product__image ">
                     <img class="merch-product__infocards" src="<?php echo get_template_directory_uri(); ?>/img/PLP_infoCards_bye.png'">
                </div>
        </div>
        </div>
    </div>
</section>

<!-- merch reverse-->

<section class="merch-reverse">
    <div class="container">
        <div class="merch__products">
            <div class="merch-product merch-box5">
                <div class="merch-product__image ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/classic_hoodie.png'">
                </div>
                <div class="merch-product__info">
                    <h2 class="merch-product__title">Nowadays micro dose</h2>
                    <div class="merch-product__reviews">
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
                    <span class="merch-product__span">67 reviews</span>
                    <p class="merch-product__price">$39.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="merch-product merch-box6" >
                <div class="merch-product__image ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nowadays_t.png'">
                </div>
                <div class="merch-product__info">
                    <h2 class="merch-product__title ">Nowadays low dose</h2>
                    <div class="merch-product__reviews">
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
                    <span class="merch-product__span">87 reviews</span>
                    <p class="merch-product__price">$59.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="merch-product merch-box7">
                <div class="merch-product__image ">
                    <img class="merch-product__img" src="<?php echo get_template_directory_uri(); ?>'/img/wavy_t.png'">
                </div>
                <div class="merch-product__info">
                    <h2 class="merch-product__title ">Nowadays high dose</h2>
                    <div class="merch-product__reviews">
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
                    <span class="merch-product__span">98 reviews</span>
                    <p class="merch-product__price">$79.99</p>
                    <a href="#" class=" btn btn__beige--small">Add to card</a>
                </div>
            </div>
            <div class="merch-product merch-box8">
                <div class="merch-product__image " >
                     <img class="merch-product__infocards" src="<?php echo get_template_directory_uri(); ?>/img/PLP_infoCards_flavors.png'">
                </div>
        </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="top-bar">Free Shipping to your door on orders over $50 </div>
        <div class="container">
            <div class="nav__mobile">
                <div class="menu__mobile">
                    <a href="#" class="js-menu-mobile__open">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/toggle-menu.svg'" />
                    </a>
                    <div class="menu-mobile__list js-menu-mobile__list">
                        <a href="#" class="menu-mobile__close js-menu-mobile__close">x</a> 
                        <?php 
                            wp_nav_menu(   
                                array ( 
                                    'theme_location' => 'mobile-menu' 
                                ) 
                            ); 
                        ?>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.svg'" class="hdr__logo-link" href={{site.url}} rel="home">
                <a href="#" class="main-cart">
                    <span class="main-cart__elements">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cart-elements.svg'" />
                    </span>    
                    Cart
                </a>
            </div>
            <div class="nav__items nav__desktop">
                <nav class="main-menu">
                    <?php 
                        wp_nav_menu(   
                            array ( 
                                'theme_location' => 'menu-left' 
                            ) 
                        ); 
                    ?>
                </nav>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg'" class="hdr__logo-link" href={{site.url}} rel="home">
                <nav class="main-menu">
                    <?php 
                        wp_nav_menu(   
                            array ( 
                                'theme_location' => 'menu-right'
                            ) 
                        ); 
                    ?>
                </nav>
            </div>
        </div>
    </header>




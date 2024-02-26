<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"/>
    <?php if (is_front_page()) : ?>
		    <meta property="og:image" content="https://trynowadays.com/wp-content/uploads/2023/03/Nowadays_6MG_5K_300DPI_HEMP.webp" />
		<?php endif; ?>
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="js-header">
        <?php get_template_part( 'template-parts/notice'); ?>
        <div class="container">
            <div class="nav__items">
                <nav class="main-menu">
                    <div class="header__hamburger js-header-content" id="js-toggle-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php 
                        wp_nav_menu(   
                            array ( 
                                'theme_location' => 'menu-left' 
                            ) 
                        ); 
                    ?>
                </nav>
                <img alt="Nowadays THC Drink Logo" class="header__mobile-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.svg'" class="hdr__logo-link" rel="home">
                <img alt="Nowadays THC Drink Logo" class="header__desktop-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg'" class="hdr__logo-link" rel="home">
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
    <?php get_template_part( 'template-parts/menu'); ?>




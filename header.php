<?php
    wp_head(); 
?>

<header class="header">
    <div class="top-bar">Free Shipping to your door on orders over $50 </div>
    <div class="container">
        <div class="nav__items">
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

<div class="menu-mobile" id="js-menu">
	<div class="menu__wrapper">
		<div class="menu__content">
			<div class="l-container">
				<nav class="menu__nav">
					<ul class="menu__list">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-mobile',
									'items_wrap'     => '%3$s',
								)
							);
						?>
					</ul>
				</nav>
			</div>
		</div>
		<div class="menu__bottom u-flex u-flex--center">
			<a href="#" class="menu__bottom-logo">
				<img alt="Nowadays THC Drink Logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-words.svg">
			</a>
			<ul>
				<li>
					<a href="#">Contact Us</a>
				</li>
				<li>
					<a href="#">FAQ</a>
				</li>
			</ul>
		</div>
	</div>
</div>
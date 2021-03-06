<?php

$image = (bool) get_query_var( 'ucfwp_image_behind_nav', false );

$container_class = 'header-gradient';

if ( !$image ) {
	$container_class = 'bg-inverse';
}

$header_img_left = get_field( 'theme_header_left', 'option' ) ?? AIRFORCEWP_THEME_IMG_URL . '/rotc-logo.png';
$header_img_right = get_field( 'theme_header_right', 'option' ) ?? AIRFORCEWP_THEME_IMG_URL . '/airforce-logo.png';

$header_text = get_bloginfo( 'name' );
$header_subtext = get_bloginfo( 'description' );
$header_link = get_bloginfo( 'url' );

$menu = wp_nav_menu( array(
	'container'       => 'div',
	'container_class' => $menu_container_class,
	'container_id'    => 'header-menu',
	'depth'           => 2,
	'echo'            => false,
	'fallback_cb'     => 'bs4Navwalker::fallback',
	'menu_class'      => 'nav navbar-nav justify-content-center',
	'theme_location'  => 'header-menu',
	'walker'          => new AirforceNavwalker()
) );
?>

<!-- set bg  -->
<div class="<?php echo $container_class; ?> header-wrapper">
	<!-- header -text -->
	<div class="d-flex justify-content-around">
		<!-- header image  -->
		<div class="">
			<a href="<?php echo $header_link; ?>"><img class="header-img" src="<?php echo $header_img_left; ?>"></a>
		</div>

		<div class="header-text">
			<h1 class="display-4 font-weight-light text-center text-white"><?php echo $header_text; ?></h1>
			<h6 class="text-white text-center font-weight-normal"><?php echo $header_subtext; ?></h6>
		</div>

		<!-- header image  -->
		<div class="">
			<a href="<?php echo $header_link; ?>"><img class="header-img" src="<?php echo $header_img_right; ?>"></a>
		</div>
	</div>

	<div class="container">
		<hr class="bg-secondary mt-3 mb-0">
	</div>

	<nav class="navbar navbar-toggleable-md navbar-inverse" aria-label="Site navigation">
		<div class="container">
			<!-- button for md and lower sizes -->
			<button class="navbar-toggler ml-auto align-self-start collapsed" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="header-menu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-text">Navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- menu for lg and greater sizes -->
			<?php if ( $menu ): ?>
				<?php echo $menu; ?>
			<?php endif; ?>
		</div>
	</nav>
</div>

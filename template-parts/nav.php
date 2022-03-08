<?php

$header_img = get_field( 'theme_header', 'option' ) ?? AIRFORCEWP_THEME_IMG_URL . '/rotc-logo.png';
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
<div class="bg-inverse">

	<!-- header image  -->
	<?php if ( $header_img ): ?>
		<div class="py-3 text-center">
			<a href="<?php echo $header_link; ?>"><img class="header-img" src="<?php echo $header_img; ?>"></a>
		</div>
	<?php endif; ?>

	<!-- header -text -->
	<div>
		<h1 class="h3 text-center"><span class="font-serif"><?php echo $header_text; ?></span></h1>
		<h6 class="text-center font-weight-normal"><?php echo $header_subtext; ?></h6>
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

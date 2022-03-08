<?php
namespace AirforceWP\Theme;

define( 'AIRFORCEWP_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


// Theme foundation
include_once AIRFORCEWP_THEME_DIR . 'includes/config.php';
include_once AIRFORCEWP_THEME_DIR . 'includes/meta.php';

// Add other includes to this file as needed.
include_once AIRFORCEWP_THEME_DIR . 'includes/airforce-nav.php';
include_once AIRFORCEWP_THEME_DIR . 'includes/options.php';

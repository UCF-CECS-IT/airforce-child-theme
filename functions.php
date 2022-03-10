<?php
namespace AirforceWP\Theme;

define( 'AIRFORCEWP_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


// Theme foundation
include_once AIRFORCEWP_THEME_DIR . 'includes/config.php';
include_once AIRFORCEWP_THEME_DIR . 'includes/meta.php';

// Add other includes to this file as needed.
include_once AIRFORCEWP_THEME_DIR . 'includes/airforce-nav.php';
include_once AIRFORCEWP_THEME_DIR . 'includes/options.php';

// Change textarea rows to 3 instead of 10 in Gravity Forms
add_filter( 'gform_field_content', function ( $field_content, $field ) {
    if ( $field->type == 'textarea' ) {
        return str_replace( "rows='10'", "rows='3'", $field_content );
    }
    return $field_content;
}, 10, 2 );

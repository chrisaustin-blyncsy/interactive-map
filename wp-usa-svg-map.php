<?php
/**
 * Plugin Name: WP USA SVG Map
 * Description: Displays a responsive SVG map of the United States via shortcode. Each state is a separate SVG element for future interaction.
 * Version: 0.1.0
 * Author: Generated
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function wpusm_enqueue_assets() {
    wp_register_style( 'wpusm-style', plugins_url( 'assets/css/usa-map.css', __FILE__ ), array(), '0.1.0' );
    wp_register_script( 'wpusm-script', plugins_url( 'assets/js/usa-map.js', __FILE__ ), array(), '0.1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpusm_enqueue_assets' );

function wpusm_render_shortcode( $atts ) {
    wp_enqueue_style( 'wpusm-style' );
    wp_enqueue_script( 'wpusm-script' );

    $svg_path = plugin_dir_path( __FILE__ ) . 'assets/svg/USA-Map-with-Guam.svg';
    if ( ! file_exists( $svg_path ) ) {
        return '<div class="usa-svg-map">SVG file not found.</div>';
    }

    $svg = file_get_contents( $svg_path );
    // Wrap in a container so Elementor/other themes can size it predictably.
    return '<div class="usa-svg-map">' . $svg . '</div>';
}
add_shortcode( 'usa_svg_map', 'wpusm_render_shortcode' );

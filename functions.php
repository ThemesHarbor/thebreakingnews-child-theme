<?php
/**
 * Functions and definitions of The Breaking News child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage The_Breaking_News
 * @since 1.0.0
 */

/**
 *  Sets up child theme defaults and registers support for various WordPress features.
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function thebreakingnews_child_theme_setup() {
     load_child_theme_textdomain( 'thebreakingnews', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'thebreakingnews_child_theme_setup' );

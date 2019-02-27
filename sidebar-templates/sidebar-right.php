<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'cheers_sidebar_position' );
?>

<?php dynamic_sidebar( 'right-sidebar' ); ?>

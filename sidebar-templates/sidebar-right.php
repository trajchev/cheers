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

?>

<?php dynamic_sidebar( 'right-sidebar' ); ?>

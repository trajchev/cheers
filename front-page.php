<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="home-wrapper">

    <?php   
        get_template_part( 'partials/_carousel' ); 
        get_template_part( 'partials/_about' );
        get_template_part( 'partials/_workflow' );
        get_template_part( 'partials/_outro' );
        get_template_part( 'partials/_pre-footer' );
    ?>
    
</div><!-- #index-wrapper -->

<?php get_footer(); ?>

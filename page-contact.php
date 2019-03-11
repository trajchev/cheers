<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content', 'contact' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #content -->
	<?php get_template_part( 'partials/_workflow' ); ?>
	<?php get_template_part( 'partials/_outro' ); ?>
	<?php get_template_part( 'partials/_pre-footer' ); ?>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>

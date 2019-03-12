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

			<div class="container grey-gradient up-rounded py-3">
				<div class="row">
					<div class="col-lg-8">
						<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop-templates/content', 'page' ); ?>
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="col-md-4">
						<?php get_template_part( 'sidebar-templates/sidebar-right' ); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #content -->
	<?php get_template_part( 'partials/_workflow' ); ?>
	<?php get_template_part( 'partials/_outro' ); ?>
	<?php get_template_part( 'partials/_pre-footer' ); ?>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying contact
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php 
			
				while ( have_posts() ) : the_post();
					get_template_part( 'loop-templates/content', 'contact' );
				endwhile;

			?>

		</main><!-- #main -->

	</div><!-- #content -->
	<?php
	
		get_template_part( 'partials/_workflow' );
		get_template_part( 'partials/_outro' );
		get_template_part( 'partials/_pre-footer' );
		
	?>
	
</div><!-- #page-wrapper -->

<?php get_footer(); ?>

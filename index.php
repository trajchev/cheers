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

<div class="wrapper" id="index-wrapper">

	<div class="container" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<header class="page-header">

				<h1 class="page-title"><?php the_title(); ?></h1>

			</header><!-- .page-header -->

			<div class="container grey-gradient up-rounded py-3">

			<?php if ( have_posts() ) : ?>

				<div class="row">

					<div class="col-lg-8">

						<?php

							while ( have_posts() ) : the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'loop-templates/content-blog', get_post_format() );

							endwhile;
						
						?>

						<!-- The pagination component -->
						<?php cheers_pagination(); ?>
						
					</div>

					<div class="col-md-4">

						<?php get_template_part( 'sidebar-templates/sidebar-right' ); ?>

					</div>

				</div>

			</div>

				<?php
				
					else :

						get_template_part( 'loop-templates/content', 'none' );
						
					endif;
				
				?>

		</main><!-- #main -->

	</div><!-- #content -->

	<?php
	
		get_template_part( 'partials/_outro' ); 
		get_template_part( 'partials/_pre-footer' );
		
	?>

</div><!-- #index-wrapper -->

<?php get_footer(); ?>

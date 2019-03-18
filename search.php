<?php
/**
 * The template for displaying search results pages.
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="search-wrapper">

	<main class="site-main" id="main">

		<div class="container" id="content" tabindex="-1">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<h1 class="page-title">
					<?php

						printf(
							/* translators: %s: query term */
							esc_html__( 'Search Results for: %s', 'Cheers' ),
							'<span>' . get_search_query() . '</span>'
						);
						
					?>
				</h1>

			</header><!-- .page-header -->

			<div class="container grey-gradient up-rounded py-3">

				<div class="row">

					<div class="col-md-8">

						<?php

							while ( have_posts() ): the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */

							get_template_part( 'loop-templates/content', 'search' );

							endwhile;

						?>

					</div>

					<div class="col-md-4">

						<?php get_template_part( 'sidebar-templates/sidebar-right' ); ?>

					</div>

				</div>

				<!-- The pagination component -->
				<?php cheers_pagination(); ?>

			</div>

			<?php else : ?>

			<div class="container grey-gradient up-rounded py-3">

				<div class="row">

					<div class="col-md-12">

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					</div>

				</div>

			</div>

			<?php endif; ?>

		</div><!-- #content -->

	</main>
	
</div><!-- #search-wrapper -->

<?php get_footer(); ?>

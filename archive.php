<?php
/**
 * Template for displaying archive pages
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="archive-wrapper">
	<div class="container" id="content" tabindex="-1">

			<main class="site-main" id="main">
                <header class="page-header">
                    <h1 class="page-title"><?php the_archive_title(); ?>
                </header><!-- .page-header -->

                <div class="container grey-gradient up-rounded py-3">
                <?php
                if ( have_posts() ) : ?>
                    <div class="row">
                        <div class="col-lg-8">
                            <?php while ( have_posts() ) : ?>
                        
                            <?php the_post(); ?>
                                <?php
                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content-blog', get_post_format() );
                                ?>
                            <?php endwhile;  wp_reset_query(); ?>

                            <!-- The pagination component -->
                            <?php cheers_pagination(); ?>
                            
                        </div>
                        <div class="col-md-4">
			                <?php get_template_part( 'sidebar-templates/sidebar-right' ); ?>
                        </div>
                    </div>
                    
                </div>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

    </div><!-- #content -->
    
	<?php get_template_part( 'partials/_outro' ); ?>
	<?php get_template_part( 'partials/_pre-footer' ); ?>

</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
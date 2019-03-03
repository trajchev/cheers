<?php
/**
 * Template Name: Blog
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
                    <h1 class="page-title"><?php echo __('Blog', 'cheers'); ?>
                </header><!-- .page-header -->

                <div class="container grey-gradient up-rounded py-3">
                <?php
                    $basic = new WP_Query( 
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => -1
                        )
                    );
                if ( $basic->have_posts() ) : ?>
                    <div class="row">
                        <?php while ( $basic->have_posts() ) : ?>
                        <div class="col-lg-8">
                            <?php $basic->the_post(); ?>
                                <?php
                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content-blog', get_post_format() );
                                ?>
                        </div>
                        <?php endwhile;  wp_reset_query(); ?>
                    </div>
                    <!-- The pagination component -->
                    <?php cheers_pagination(); ?>
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
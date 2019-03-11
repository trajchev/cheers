<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
            <?php
                $args = array(
                'post_type' => 'product',
                'orderby' => 'menu_order',
                'posts_per_page' => -1,
                'category_name' => 'whiskey'
                );

                $query = new WP_Query( $args );
            ?>
            <?php if ( $query->have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?>
            </header><!-- .page-header -->
                
            <div class="container grey-gradient up-rounded py-3">
                <div class="row">
                <?php while ( $query->have_posts() ) : ?>
                    <div class="col-sm-6">
                    <?php $query->the_post(); ?>
                        <?php
                        /*
                        * Include the Post-Format-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                        */
                        get_template_part( 'loop-templates/content-products', get_post_format() );
                        ?>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <!-- The pagination component -->
                <?php cheers_pagination(); ?>
            </div>

            <?php else : ?>

                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

            <?php endif; ?>

        </main><!-- #main -->

    </div><!-- #content -->
    
    <?php get_template_part( 'partials/_workflow' ); ?>
	<?php get_template_part( 'partials/_outro' ); ?>
	<?php get_template_part( 'partials/_pre-footer' ); ?>

</div><!-- #archive-wrapper -->

<?php get_footer(); ?>

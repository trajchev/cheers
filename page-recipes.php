<?php
/**
 * Template Name: Recipes
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
                <h1 class="page-title"><?php echo __('Recipes', 'cheers'); ?></h1>
            </header><!-- .page-header -->

            <div class="container grey-gradient up-rounded py-3">
            <?php
                $basic = new WP_Query( 
                    array(
                        'post_type' => 'recipe',
                        'posts_per_page' => 10
                    )
                );
            if ( $basic->have_posts() ) : ?>
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                        
                            while ( $basic->have_posts() ) : $basic->the_post();
                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content', 'recipes' );

                            endwhile;
                            
                            wp_reset_query();
                            
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

</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
<?php
/**
 * The template for displaying all single posts.
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

			<main class="site-main grey-gradient up-rounded py-3" id="main">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <?php
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'loop-templates/content', 'single' );

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;

                                endwhile;
                            ?>
                        </div>
                        <div class="col-md-4">
			                <?php get_template_part( 'sidebar-templates/sidebar-right' ); ?>
                        </div>
                    </div>
                </div>

			</main><!-- #main -->
    </div><!-- #content -->
    <?php

        get_template_part( 'partials/_outro' ); 
        get_template_part( 'partials/_pre-footer' );
        
    ?>
</div><!-- #single-wrapper -->

<?php get_footer(); ?>
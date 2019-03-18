<?php
/*
    Template Name: Products
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

                <h1 class="page-title"><?php the_title(); ?></h1>

            </header><!-- .page-header -->

            <?php

                $products = new WP_Query(

                    array(
                        'post_type' => 'product',
                        'category_name'  => get_the_title(),
                        'posts_per_page' => -1
                    )

                );
            
                if ( $products->have_posts() ) : ?>
                    
                    <div class="container grey-gradient up-rounded py-3">

                        <div class="row">

                        <?php while ( $products->have_posts() ) : ?>

                            <div class="col-sm-6">

                                <?php

                                    $products->the_post();

                                        /*
                                        * Include the Post-Format-specific template for the content.
                                        * If you want to override this in a child theme, then include a file
                                        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                        */
                                        get_template_part( 'loop-templates/content-products', get_post_format() );
                                        
                                ?>

                            </div>
                            
                            <?php endwhile; wp_reset_query(); ?>

                        </div>

                        <!-- The pagination component -->
                        <?php cheers_pagination(); ?>

                    </div>

                    <?php
                    
                        else :

                            get_template_part( 'loop-templates/content', 'none' );
                            
                        endif;

                    ?>

        </main><!-- #main -->

    </div><!-- #content -->
    
    <?php
    
        get_template_part( 'partials/_workflow' );
        get_template_part( 'partials/_outro' );
        get_template_part( 'partials/_pre-footer' );
        
    ?>

</div><!-- #archive-wrapper -->

<?php get_footer(); ?>

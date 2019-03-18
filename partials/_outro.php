<!-- OUTRO SECTION -->
<section id="outro-section">

    <div class="container">

        <div class="top-border-10 grey-gradient">

            <div class="row">

            <?php

                // query for the subscribe page
                $sub_query = new WP_Query( 'pagename=subscribe' );

                // "loop" through query (even though it's just one page) 
                while ( $sub_query->have_posts() ) : $sub_query->the_post();

                ?>

                <div class="col-sm-12 col-md-5">

                    <div class="card py-4">

                        <div class="card-content px-4 border-right-brown">

                            <h4 class="block-heading"><?php the_field('custom_heading'); ?></h4>

                            <div class="bordered-image"><?php the_post_thumbnail(); ?></div>

                            <?php the_content(); ?>

                        </div>

                    </div>

                </div>

                <div class="col-sm-12 col-md-7">

                    <div class="card py-4">

                        <div class="card-content px-4">

                            <h4 class="block-heading"><?php the_field('custom_subheading'); ?></h4>

                            <?php the_excerpt(); ?>

                            <?php echo do_shortcode('[contact-form-7 id="310" title="Subscription"]'); ?>

                        </div>

                    </div>

                </div>

                <? endwhile;

                    // reset post data (important!)
                    wp_reset_postdata();
                ?>

            </div>

        </div>

    </div>
    
</section>
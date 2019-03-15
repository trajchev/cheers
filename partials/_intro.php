<div id="intro-section">

    <div class="container">

        <div class="carousel-wrapper py-4 grey-gradient up-rounded dwn-rounded mb-2">

            <?php

                $carousel = new WP_Query(

                    array(

                        'post_type' => array('product', 'post', 'recipe'),
                        'category_name'  => 'carousel',
                        'posts_per_page' => -1

                    )

                );

                $i = 0;

            ?>

            <div id="cheers-carousel" class="carousel slide" data-ride="carousel">

                <?php  if ( $carousel->have_posts() ) : ?>

                <div class="carousel-inner">

                    <?php while ( $carousel->have_posts() ) : ?> 

                    <?php $carousel->the_post(); ?>

                    <?php

                        if ($i == 0) : ?>

                            <div class="carousel-item active">

                        <?php else: ?>

                            <div class="carousel-item">

                        <?php endif;  $i++; ?>

                                <?php the_post_thumbnail(); ?>

                                <div class="carousel-caption">

                                    <a href="<?php the_permalink(); ?>">

                                        <h3><?php the_title(); ?></h3>

                                    </a>

                                </div>   

                            </div>

                    <?php endwhile; ?>
                    
                </div>

                <a class="carousel-control-prev" href="#cheers-carousel" data-slide="prev">
                    <i class="fa fa-glass fa-rotate-90" aria-hidden="true"></i>
                </a>

                <a class="carousel-control-next" href="#cheers-carousel" data-slide="next">
                    <i class="fa fa-glass fa-rotate-270" aria-hidden="true"></i>
                </a>

                <?php endif; ?>

            </div>

        </div>
    
    </div>

</div>
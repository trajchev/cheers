<!-- WORKFLOW SECTION -->
<section id="workflow-section">
    <div class="container">
        <div class="bg-banana top-border-14 py-2">
            <div class="row">
                <?php
                    $args = array(
                    'post_type' => 'recipe',
                    'posts_per_page' => 3,
                    'orderby' => 'menu_order'
                    );

                    $child_query = new WP_Query( $args );
                ?>

                <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card text-center container mb-4">
                        <header class="card-header">
                            <h3><?php the_title(); ?></h3>
                        </header>
                        <?php the_excerpt(); ?>
                        <footer class="card-footer">
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn btn-dark"><?php _e('learn more', 'cheers'); ?></a>
                        </footer>
                    </div>
                </div>
                <?php 
                    endwhile; 
                    wp_reset_postdata();    
                ?>
            </div>

            <div class="container">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs slider-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link grey-gradient up-rounded active" data-toggle="tab" href="#home"><?php _e('Brand New', 'cheers'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-gradient up-rounded" data-toggle="tab" href="#testimonials"><?php _e('Testimonials', 'cheers'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-gradient up-rounded" data-toggle="tab" href="#menu2"><?php _e('Blog Posts', 'cheers'); ?></a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content grey-gradient up-rounded">
                    <div id="home" class="container tab-pane active">
                        <?php
                            $args = array(
                            'post_type' => array('post', 'product'),
                            'posts_per_page' => 3,
                            'orderby' => 'menu_order'
                            );

                            $child_query = new WP_Query( $args );
                        ?>
                        <div class="row">
                            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                            <div class="col-sm-6 col-lg-4">
                                <a href="<?php the_permalink(); ?>">
                                <article class="card text-center text-white container mb-4 pt-4">
                                    <header class="card-header">
                                        <h3><?php the_title(); ?></h3>
                                    </header>
                                    <div class="card-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </article>
                                </a>
                            </div>
                            <?php 
                                endwhile; 
                                wp_reset_postdata();    
                            ?>
                        </div>
                    </div>
                    <div id="testimonials" class="container tab-pane fade pt-4">
                        <?php
                            $args = array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => 3,
                            'orderby' => 'menu_order'
                            );

                            $child_query = new WP_Query( $args );
                        ?>
                        <div class="row">
                            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                            <div class="col-sm-6 col-lg-4">
                                <blockquote class="card text-right container mb-4 py-4">
                                    <?php the_excerpt(); ?>
                                    <cite>
                                        <?php the_field('client'); ?> <span><?php the_field('position'); ?></span>
                                    </cite>
                                </blockquote>
                            </div>
                            <?php 
                                endwhile; 
                                wp_reset_postdata();    
                            ?>
                        </div>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                        <?php
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'orderby' => 'menu_order'
                            );

                            $child_query = new WP_Query( $args );
                        ?>
                        <div class="row">
                            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                            <div class="col-sm-6 col-lg-4">
                                <a href="<?php the_permalink(); ?>">
                                <article class="card text-center text-white container mb-4 py-4">
                                    <header class="card-header">
                                        <h3><?php the_title(); ?></h3>
                                    </header>
                                    <div class="card-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </article>
                                </a>
                            </div>
                            <?php 
                                endwhile; 
                                wp_reset_postdata();    
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
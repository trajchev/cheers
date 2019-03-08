<!-- WORKFLOW SECTION -->
<section id="workflow-section">
    <div class="container">
        <div class="bg-banana top-border-14 py-2">
            <div class="row">
                <?php
                    $args = array(
                    'post_parent' => 26,
                    'post_type' => 'page',
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
                        <a class="nav-link grey-gradient up-rounded active" data-toggle="tab" href="#home">Latest Press</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-gradient up-rounded" data-toggle="tab" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-gradient up-rounded" data-toggle="tab" href="#menu2">Blog Posts</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content grey-gradient up-rounded">
                    <div id="home" class="container tab-pane active"><br>
                        <h3>Latest Posts</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            <div class="col-sm-6 col-md-4">
                                <blockquote class="card text-right text-white container mb-4">
                                    <?php the_excerpt(); ?>
                                    <cite>
                                        <?php the_field('client'); ?> <?php the_field('position'); ?>
                                    </cite>
                                </blockquote>
                            </div>
                            <?php 
                                endwhile; 
                                wp_reset_postdata();    
                            ?>
                        </div>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                        <h3>Blog Posts</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
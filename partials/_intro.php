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

            ?>


            <?php if ( $carousel->have_posts() ) : ?>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">


                    <?php while ( $carousel->have_posts() ) : ?> 

                    <?php $i = 0; $carousel->the_post(); ?>

                    <?php

                        
                            if ($i == 0) : ?>
                                <div class="carousel-item active">
                                    <img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="Los Angeles" width="1100" height="500">
                                    <div class="carousel-caption">
                                        <h3>Los Angeles</h3>
                                        <p>We had such a great time in LA!</p>
                                    </div>   
                                </div>
                            <?php else: ?>
                                <div class="carousel-item">
                                    <img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="Los Angeles" width="1100" height="500">
                                    <div class="carousel-caption">
                                        <h3>Los Angeles</h3>
                                        <p>We had such a great time in LA!</p>
                                    </div>   
                                </div>
                            <?php endif;  $i++; ?>

                    <?php endwhile; ?>

                    <!-- <div class="carousel-item">
                        <img src="https://www.w3schools.com/bootstrap4/chicago.jpg" alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>   
                    </div>

                    <div class="carousel-item">
                        <img src="https://www.w3schools.com/bootstrap4/ny.jpg" alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>   
                    </div> -->
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <i class="fa fa-glass fa-rotate-90" aria-hidden="true"></i>
                </a>

                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <i class="fa fa-glass fa-rotate-270" aria-hidden="true"></i>
                </a>

            </div>

            <?php endif; ?>
        
        </div>
    
    </div>

</div>
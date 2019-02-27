<!-- MAIN SLIDER -->
<section id="main-carousel">
    <div id="cheersCarousel" class="carousel slide container" data-ride="carousel">
        <div class="carousel-inner">
        <?php
            $i = 0;
            // check if the repeater field has rows of data
            if( have_rows('images') ):
                // loop through the rows of data
                while ( have_rows('images') ) : the_row(); 
                ?>
                <div class="carousel-item <?php echo 'carousel-image-' . ($i + 1); echo $i === 0 ? ' active': ''; ?>" style="background-image: url('<?php the_sub_field('image'); ?>')">
                    <div class="carousel-caption d-none d-sm-block text-center">
                        <a href="#" class="carousel-item-title d-block grey-gradient up-rounded"><?php the_sub_field('image_title'); ?></a>
                    </div>
                </div>
            <?php        // display a sub field value
                $i++;
                endwhile;
                
                else :
                    // no rows found
                endif;
            ?>
        </div>
        <a href="#cheersCarousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#cheersCarousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
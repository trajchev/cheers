<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="home-wrapper">

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

    <section id="about-section">
        <div class="container">
            <div class="grey-gradient up-rounded px-4">
                <article class="mx-auto article-block py-4">
                    <div class="article-header">
                        <h2 class="h4 text-center py-0 my-0"><?php _e('About us', 'cheers'); ?></h2>
                        <h3 class="h6 text-center py-0"><?php _e('Get to know us', 'cheers'); ?></h2>
                    </div>
                    <div class="article-content">
                        <?php the_field('about_section'); ?>
                    </div>
                </article>
            </div>
        </div>
    </section>

</div><!-- #index-wrapper -->

<?php get_footer(); ?>

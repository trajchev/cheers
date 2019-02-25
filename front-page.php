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

    <section id="workflow-section">
        <div class="container">
            <div class="bg-banana top-border-14 py-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center container mb-4">
                            <header class="card-header">
                                <h3>Research</h3>
                            </header>
                            <p>
                                Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                            </p>
                            <footer class="card-footer">
                                <a href="#" class="btn btn-dark">learn more</a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card text-center container mb-4">
                            <header class="card-header">
                                <h3>Work</h3>
                            </header>
                            <p>
                                Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                            </p>
                            <footer class="card-footer">
                                <a href="#" class="btn btn-dark">learn more</a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center container mb-4">
                            <header class="card-header">
                                <h3>Deliver</h3>
                            </header>
                            <p>
                                Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                            </p>
                            <footer class="card-footer">
                                <a href="#" class="btn btn-dark">learn more</a>
                            </footer>
                        </div>
                    </div>
                </div>

                <!-- <div class="row"> -->
                    <div class="container">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs slider-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link grey-gradient up-rounded active" data-toggle="tab" href="#home">Latest Press</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link grey-gradient up-rounded" data-toggle="tab" href="#menu1">Testimonials</a>
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
                            <div id="menu1" class="container tab-pane fade"><br>
                                <h3>Testimonials</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <h3>Blog Posts</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>

    <section id="outro-section">
        <div class="container">
            <div class="top-border-10 grey-gradient">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="card py-4">
                            <div class="card-content px-4 border-right-brown">
                                <h4 class="block-heading"><strong>Phaetra</strong> Eget</h4>
                                <p>
                                <div class="bordered-image" style="width: 150px; height: 100px; background-color: #fff"></div>
                                Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                                </p>
                                <p>
                                Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-7">
                        <div class="card py-4 padded-left-mobile">
                            <div class="card-content pr-4">
                                <h4 class="block-heading"><strong>Newsletter</strong> Subscription</h4>
                                <p>
                                Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                                </p>
                                <form action="" class="py-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control grey-gradient pale-border" placeholder="email">
                                        <div class="input-group-append append-border-white">
                                            <button class="btn btn-brown">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pre-footer">
        <div class="container">
            <div class="bg-banana top-border-10 pt-2 pb-4">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <header class="card-header border-bottom-grey">
                                <h3 class="h5 block-heading text-center pb-2">Flickr</h3>
                            </header>
                            <div class="card-content">
                                <ul class="bordered-boxes px-3 m-0">
                                    <li class="bordered-boxes-item"></li>
                                    <li class="bordered-boxes-item"></li>
                                    <li class="bordered-boxes-item"></li>
                                    <li class="bordered-boxes-item"></li>
                                    <li class="bordered-boxes-item"></li>
                                    <li class="bordered-boxes-item"></li>
                                    <li class="bordered-boxes-item"></li>
                                    <li class="bordered-boxes-item"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card">
                            <header class="card-header border-bottom-grey">
                                <h3 class="h5 block-heading text-center pb-2">Featured Clients</h3>
                            </header>
                            <div class="card-content">
                                <ul class="pre-footer-menu p-0 m-0 text-center">
                                    <li><a href="http://#">The New York Times</a></li>
                                    <li><a href="http://#">Coca Cola</a></li>
                                    <li><a href="http://#">Pixar</a></li>
                                    <li><a href="http://#">Dukati</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card">
                            <header class="card-header border-bottom-grey">
                                <h3 class="h5 block-heading text-center pb-2">Our Friends</h3>
                            </header>
                            <div class="card-content">
                                <ul class="pre-footer-menu p-0 m-0 text-center">
                                    <li><a href="http://#">GraphicRiver</a></li>
                                    <li><a href="http://#">ThemeForest</a></li>
                                    <li><a href="http://#">NineteenEightyOne</a></li>
                                    <li><a href="http://#">SuiteTuts</a></li>
                                    <li><a href="http://#">WeAreRuckus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-2">
                        <div class="card">
                            <header class="card-header border-bottom-grey">
                                <h3 class="h5 block-heading text-center pb-2">Pages</h3>
                            </header>
                            <div class="card-content">
                                <ul class="pre-footer-menu p-0 m-0 text-center">
                                    <li><a href="http://#">Home</a></li>
                                    <li><a href="http://#">About</a></li>
                                    <li><a href="http://#">Work</a></li>
                                    <li><a href="http://#">Blog</a></li>
                                    <li><a href="http://#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- #index-wrapper -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="wrapper" id="archive-wrapper">
	<div class="container" id="content" tabindex="-1">

			<main class="site-main" id="main" ng-app="products">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
                        <h1 class="page-title"><?php echo __('Products', 'cheers'); ?>
					</header><!-- .page-header -->
                    
                    <div class="container grey-gradient up-rounded py-3">
                        <div class="row" id="products-listed">
                            <div class="col-md-12">
                                <nav class="product-filter">
                                    <ul class="nav justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link grey-gradient active" onclick="getProducts('all')" href="javascript:void(0)">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link grey-gradient-inverse" onclick="getProducts('wine')" href="javascript:void(0)">Wine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link grey-gradient-inverse" onclick="getProducts('whiskey')" href="javascript:void(0)">Whiskey</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link grey-gradient-inverse" onclick="getProducts('vodka')" href="javascript:void(0)">Vodka</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link grey-gradient-inverse" onclick="getProducts('beer')" href="javascript:void(0)">Beer</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="row" id="products-listed" ng-controller="main-ctrl">
                        <?php while ( have_posts() ) : ?>
                            <div class="col-sm-6">
                            <?php the_post(); ?>
                                <?php
                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content-products', get_post_format() );
                                ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <!-- The pagination component -->
                        <?php cheers_pagination(); ?>
                    </div>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

    </div><!-- #content -->
    
    <?php get_template_part( 'partials/_workflow' ); ?>
	<?php get_template_part( 'partials/_outro' ); ?>
	<?php get_template_part( 'partials/_pre-footer' ); ?>

</div><!-- #archive-wrapper -->

<?php get_footer(); ?>

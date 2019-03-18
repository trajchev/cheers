<?php
/**
 * Single product partial template.
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('cheers-post-content'); ?> id="post-<?php the_ID(); ?>">

    <div class="entry-thumbnail">

        <?php the_post_thumbnail(); ?>
        
    </div>

	<header class="entry-header pt-2">

        <?php the_title( '<h1 class="entry-title text-left">', '</h1>' ); ?>

        <?php if( have_rows('ingredients') ): ?>

            <h4><?php esc_html_e( 'Ingredients', 'cheers' ); ?></h4>

            <ul class="product-stats m-0 px-0 pb-2">

                <?php while ( have_rows('ingredients') ) : the_row(); ?>

                <li>
                    <?php the_sub_field('quantity'); ?> 
                    <span class="value"><?php the_sub_field('ingredient'); ?></span>
                </li>

                <?php endwhile; ?>

            </ul>

        <?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php cheers_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

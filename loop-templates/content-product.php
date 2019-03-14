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
        <?php if (get_field('description')) : ?>
            <h4 class="mb-0"><?php the_field('description'); ?></h4>
        <?php endif; ?>

        <ul class="product-stats m-0 px-0 pt-2">
            <li><?php esc_html_e( 'Year ', 'cheers' ); ?><span class="value"><?php the_field('production_year'); ?></span></li>
            <li><?php esc_html_e( 'Origin ', 'cheers' ); ?> <span class="value"><?php the_field('production_region'); ?></span></li>
        </ul>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php cheers_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

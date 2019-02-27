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
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div>

	<header class="entry-header-single">

        <?php the_title( '<h1 class="entry-title-single">', '</h1>' ); ?>
        <h4 class="mb-0"><?php the_field('description'); ?></h4>

        <ul class="product-stats m-0 px-0 pt-2">
            <li>Year <span class="value">1968</span></li>
            <li>Origin <span class="value">France</span></li>
        </ul>

	</header><!-- .entry-header -->

	

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php cheers_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<?php
/**
 * Single post partial template.
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
		<?php if (get_field('description')) : ?>
			<h4 class="mb-0"><?php the_field('description'); ?></h4>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer pt-3">
		<i class="fa fa-folder"></i>
		<?php the_category(); ?>
			<?php the_tags('<ul class="tag-cloud"><li class="tag">', '</li><li class="tag">', '</li></ul>'); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

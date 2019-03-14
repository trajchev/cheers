<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package Cheers
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}
?>

<article <?php post_class('cheers-blog-post mb-4'); ?> id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>">
		<div class="entry-thumbnail">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
	</a>
	<header class="entry-header py-2">
		<a href="<?php the_permalink(); ?>">
			<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ),'</h2>'); ?>
		</a>
	</header><!-- .entry-header -->

	<div class="entry-content pb-4">
		<?php the_excerpt(); ?>

		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn btn-brown"><?php _e('Read more', 'cheers'); ?></a>
	</div>

	<?php if ( 'post' == get_post_type() ) : ?>
	<footer class="entry-footer">
		<div class="entry-meta pb-2">
			<h6><?php the_date('d.m.Y - h:i A'); ?></h6>
			<p><?php _e('by ', 'cheers'); ?> <span><?php the_author(); ?></span></p>
		</div><!-- .entry-meta -->
	</footer>
	<?php endif; ?>
</article><!-- #post-## -->

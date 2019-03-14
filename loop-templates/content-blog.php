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

<article <?php post_class('cheers-blog-post'); ?> id="post-<?php the_ID(); ?>">
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
	</div>

	<?php if ( 'post' == get_post_type() ) : ?>
	<footer class="entry-footer">
		<div class="entry-meta pb-2">
			<h6><?php the_date(); ?></h6>
			<p><?php _e('posted by ', 'cheers'); ?> <span><?php the_author(); ?></span></p>
		</div><!-- .entry-meta -->
	</footer>
	<?php endif; ?>
</article><!-- #post-## -->

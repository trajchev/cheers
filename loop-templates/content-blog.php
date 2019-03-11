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

		<header class="entry-header-blog py-2">
			<?php
				the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ),'</h2>');
			?>
			<h4 class="mb-0"><?php the_excerpt(); ?></h4>

			<?php if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta py-2">
					<h6><?php the_date(); ?></h6>
					<p><?php _e('posted by ', 'cheers'); ?> <span><?php the_author(); ?></span></p>
				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->
    </a>

</article><!-- #post-## -->

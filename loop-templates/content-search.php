<?php
/**
 * Search results partial template.
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('cheers-blog-post'); ?> id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>">
		<header class="entry-header-blog py-2">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</header><!-- .entry-header -->

		<footer class="search-entry-footer py-2">
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="search-entry-meta">
				<h6><?php the_date(); ?></h6>
				<p><?php _e('posted by ', 'cheers'); ?> <span><?php the_author(); ?></span></p>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</footer><!-- .entry-footer -->
	</a>
</article><!-- #post-## -->

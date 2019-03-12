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
	<header class="entry-header-blog py-2">
		<a href="<?php the_permalink(); ?>">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</a>
	</header><!-- .entry-header -->

	<?php if ( 'post' == get_post_type() ) : ?>
	<footer class="search-entry-footer py-2">
		<div class="search-entry-meta">
			<h6><?php the_date(); ?></h6>
			<p><?php _e('posted by ', 'cheers'); ?> <span><?php the_author(); ?></span></p>
		</div><!-- .entry-meta -->
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

<?php
/**
 * Partial template for content in page.php
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('cheers-archive-content'); ?> id="post-<?php the_ID(); ?>">

    <a href="<?php the_permalink(); ?>">

	
    <div class="entry-thumbnail">
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div>
    <header class="entry-header-archive">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <?php if (get_field('description')) : ?>
            <h4 class="mb-0"><?php the_field('description'); ?></h4>
        <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
    </a>
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'Cheers' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="no-results not-found">

	<div class="page-content container py-4">
		
		<header class="entry-header">

			<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'Cheers' ); ?></h2>

		</header>

		<section class="content-none">

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'Cheers' ), array(
	'a' => array(
		'href' => array(),
	),
) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<h3 class="py-3"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Cheers' ); ?></h3>

			<?php
				get_search_form();
		else : ?>

			<h3 class="py-3"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'Cheers' ); ?></h3>

			<?php
				
				get_search_form();
				
			endif; ?>

		</section>

	</div><!-- .page-content -->
	
</section><!-- .no-results -->
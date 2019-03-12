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
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'Cheers' ); ?></h1>
	</header><!-- .page-header -->
	<div class="page-content container grey-gradient up-rounded py-4">
		<section class="content-none">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<h3 class="py-3"><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'Cheers' ), array(
	'a' => array(
		'href' => array(),
	),
) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></h3>

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
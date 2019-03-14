<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'Cheers_container_type' );
?>

<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<header class="page-header author-header">

					<?php

						if ( isset( $_GET['author_name'] ) ) {
							$curauth = get_user_by( 'slug', $author_name );
						} else {
							$curauth = get_userdata( intval( $author ) );
						}

					?>

					<h1><?php echo esc_html__( 'About:', 'Cheers' ) . ' ' . esc_html( $curauth->nickname ); ?></h1>

					<?php 
					
						if ( ! empty( $curauth->ID ) ) : 
						
							echo get_avatar( $curauth->ID );
						
						endif;


						if ( ! empty( $curauth->user_url ) || ! empty( $curauth->user_description ) ) :
						
					?>

						<dl>

							<?php if ( ! empty( $curauth->user_url ) ) : ?>

								<dt><?php esc_html_e( 'Website', 'Cheers' ); ?></dt>

								<dd>
									<a href="<?php echo esc_url( $curauth->user_url ); ?>"><?php echo esc_html( $curauth->user_url ); ?></a>
								</dd>

							<?php
						
								endif;

								if ( ! empty( $curauth->user_description ) ) :
								
							?>

								<dt><?php esc_html_e( 'Profile', 'Cheers' ); ?></dt>
								<dd><?php esc_html_e( $curauth->user_description ); ?></dd>

							<?php endif; ?>

						</dl>

					<?php endif; ?>

					<h2><?php echo esc_html( 'Posts by', 'Cheers' ) . ' ' . esc_html( $curauth->nickname ); ?>:</h2>

				</header><!-- .page-header -->

				<ul>

					<!-- The Loop -->
					<?php
					
						if ( have_posts() ) : 
						
							while ( have_posts() ) : the_post();
					
					?>

							<li>
								<?php

									printf(
										'<a rel="bookmark" href="%1$s" title="%2$s %3$s">%3$s</a>',
										esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) ),
										esc_attr( __( 'Permanent Link:', 'Cheers' ) ),
										the_title( '', '', false )
									);

									cheers_posted_on();

									esc_html_e( 'in', 'cheers' );

									the_category( '&' );

								?>

							</li>

						<?php endwhile; ?>

					<?php
					
						else : 
							
							get_template_part( 'loop-templates/content', 'none' );

						endif;
						
					?>

				</ul>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php cheers_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

</div><!-- #author-wrapper -->

<?php get_footer(); ?>

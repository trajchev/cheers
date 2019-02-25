<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Cheers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>


	<footer id="site-footer">
        <div class="container">
            <div class="dwn-rounded py-2 grey-gradient mb-4">
                <div class="row">
                    <div class="col-sm-12">
						<p class="copyright-text py-2 my-0 px-4 text-white text-center">
							Copyright &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>

</html>


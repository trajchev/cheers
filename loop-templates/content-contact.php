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

<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

<article <?php post_class('cheers-page-content'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="map-content up-rounded grey-gradient pt-4">

        <div id="map"> </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-box my-4">
                        <header>
                            <h5>Atlanta</h5>
                            <h6>Corporate Headquarters</h6>
                        </header>
                        <div class="card-content">
                            <ul class="card-content-list">
                                <li><strong>1234 Peachtree Street - Atlanta GA</strong></li>
                                <li>Email: <a href="mailto:example@example.com">example@example.com</a></li>
                                <li>Phone: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Fax: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Contact: <a href="mailto:example@example.com">John D, Director of PR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-box my-4">
                        <header>
                            <h5>New York</h5>
                            <h6>Corporate Headquarters</h6>
                        </header>
                        <div class="card-content">
                            <ul class="card-content-list">
                                <li><strong>1234 Peachtree Street - New York</strong></li>
                                <li>Email: <a href="mailto:example@example.com">example@example.com</a></li>
                                <li>Phone: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Fax: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Contact: <a href="mailto:example@example.com">John D, Director of PR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-box my-4">
                        <header>
                            <h5>London</h5>
                            <h6>Corporate Headquarters</h6>
                        </header>
                        <div class="card-content">
                            <ul class="card-content-list">
                                <li><strong>1234 London Street - London</strong></li>
                                <li>Email: <a href="mailto:example@example.com">example@example.com</a></li>
                                <li>Phone: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Fax: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Contact: <a href="mailto:example@example.com">John D, Director of PR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-box my-4">
                        <header>
                            <h5>Tokyo</h5>
                            <h6>Corporate Headquarters</h6>
                        </header>
                        <div class="card-content">
                            <ul class="card-content-list">
                                <li><strong>1234 Osaka Street - Tokyo</strong></li>
                                <li>Email: <a href="mailto:example@example.com">example@example.com</a></li>
                                <li>Phone: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Fax: <a href="tel:+5555555555">+ 555 5555 555</a></li>
                                <li>Contact: <a href="mailto:example@example.com">John D, Director of PR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="container top-border-14 p-4">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card card-box contact-content">
                        <header>
                            <h2><?php _e('Contact Us', 'cheers')?></h2>
                        </header>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="form">
                            <div class="form-group">
                                <label for="name">Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label for="name">Email <span class="required">*</span></label>
                                <input type="email" class="form-control" name="name" id="name" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="name">Message <span class="required">*</span></label>
                                <textarea name="" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <p class="form-submit">
                                <input type="submit" id="submit" class="btn btn-secondary" value="Submit" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'Cheers' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

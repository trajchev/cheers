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

<article <?php post_class('cheers-page-content'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="map-content up-rounded grey-gradient pt-4">

        <div id="map"> </div>

        <div class="container">

            <div class="row">

                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('contact_location') ):

                    // loop through the rows of data
                    while ( have_rows('contact_location') ) : the_row(); 

                ?>

                <div class="col-sm-6 col-md-3">

                    <div class="card card-box my-4">

                        <header class="card-header">

                            <h5><?php the_sub_field('office_city'); ?></h5>

                            <h6><?php the_sub_field('office_description'); ?></h6>

                        </header>

                        <div class="card-content">

                            <address>

                                <ul class="card-content-list">
                                    <li>
                                        <strong><?php the_sub_field('office_address'); ?></strong>
                                    </li>
                                    <li>
                                        <?php _e('Email:', 'cheers'); ?> 
                                        <a href="mailto:<?php the_sub_field('office_email'); ?>">
                                            <?php the_sub_field('office_email'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <?php _e('Phone:', 'cheers'); ?> 
                                        <a href="tel:<?php the_sub_field('office_phone'); ?>">
                                            <?php the_sub_field('office_phone'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <?php _e('Fax:', 'cheers'); ?> 
                                        <a href="tel:<?php the_sub_field('office_fax'); ?>">
                                            <?php the_sub_field('office_fax'); ?>
                                        </a>
                                    </li>
                                </ul>

                            </address>

                        </div>

                    </div>

                </div>

                <?php endwhile; endif; ?>

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

                        <?php echo do_shortcode('[contact-form-7 id="309" title="Contact US"]'); ?>

                    </div>

                </div>

            </div>

        </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'cheers' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>

<script>
// The script for the google map pins
// Made with ACF repeater

    var map;
    var markers = [];

    var officeData = [

        <?php
            // check if the repeater field has rows of data
            if( have_rows('contact_location') ):
            // loop through the rows of data
            while ( have_rows('contact_location') ) : the_row(); 
        ?>
        
        {
            lat: <?php the_sub_field('office_latitude'); ?>,
            lon: <?php the_sub_field('office_longitude'); ?>,
        },
        
        <?php endwhile; endif; ?>
    ];

    function loadMap() {

        var mapOptions = {
            zoom: 4,
            center: new google.maps.LatLng(43.7800574,7.7190691),
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.RIGHT_TOP
            }
        };

        var mapId = document.getElementById('map');

        map = new google.maps.Map(mapId, mapOptions);

        for (var i = 0; i < officeData.length; i++) {
            var office = officeData[i];
            //Add the marker to the map
            newMarker = addMarker(office);  
            //push te marker in list
            markers.push(newMarker);
            //Append the data to the marker
            newMarker.office = office;
        }
    }

    function addMarker(office) {
        var marker = new google.maps.Marker({

            position: new google.maps.LatLng(office.lat, office.lon),
            map: map,
            icon: {
                url: '<?php echo get_template_directory_uri(); ?>/img/main/pin-active.png',
                size: new google.maps.Size(32, 32),
                origin: new google.maps.Point(0,0),
                anchor: new google.maps.Point(16, 32),
                scaledSize: new google.maps.Size(32, 32)
            },
            clickable: false,
        });
        return marker;
    };

    google.maps.event.addDomListener(window, 'load', loadMap());

</script>
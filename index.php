<?php
/*
Plugin Name: DC Share
Plugin URI: http://www.davidcusack.com
Description: Some really simple share buttons
Version: 1.0
Author: David Cusack
Author URI: http://www.davidcusack.com
License: Plugin comes under GPL Licence.
*/


function dc_share() {
	?>
		<div class="dc-share">
			<h3>Make a differance and spread the news</h3>
			<div class="facebook"><a class="crime-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank">Share on Facebook</a></div>
			<div class="twitter"><a class="crime-share-twitter" href="https://twitter.com/home?status=<?php echo "Have you seen missing person " . get_post_meta( get_the_ID(), 'crime_missing_name', true ) ?> <?php the_permalink() ?>"  target="_blank">Share on Twitter</a></div>
			<div class="whatsapp"><a href="whatsapp://send?text=http://webdevelopmentscripts.com">Share on whatsapp</a></div>
		</div>

	<?php

	// return 123;
}


wp_register_script( 'dc-share-script', plugins_url( 'js/dc-share.js', __FILE__ ) );
wp_enqueue_script( 'dc-share-script' );

wp_register_style( 'dc-share-style', plugins_url('style.css', __FILE__) );
wp_enqueue_style( 'dc-share-style' ); 

add_shortcode( 'dc_share_shortcode', 'dc_share' );

<?php
	$args = array( 'post_type' => 'partnerships', 'posts_per_page' => 8 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	the_post_thumbnail( array( 300, 80 ) );
	endwhile;
	wp_reset_postdata();
?>
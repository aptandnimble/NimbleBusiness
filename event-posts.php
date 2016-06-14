<?php
	$args = array( 'post_type' => 'tf_events', 'posts_per_page' => 2 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>
		<div class="full-events">
		    <div class="text">
		        <div class="title">
		            <div class="date"><?php the_field('event_start_date'); ?> - <?php the_field('event_location'); ?></div>
		            <h3><?php the_title(); ?></h3>
		        </div>
		    </div>
		</div>
<?php
	endwhile;
	wp_reset_postdata();
?>
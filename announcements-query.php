	<?php query_posts( 'category_name=Announcements&posts_per_page=1' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php if ( has_post_thumbnail() ) { ?>
		<div class="query-img" <?php if ( $id = get_post_thumbnail_id() ) {     if ( $src = wp_get_attachment_url( $id ) )      printf( ' style="background-image: url(%s);"', $src ); } ?>> 
		</div>
		<?php } ?>


		<div class="query-copy">
			<span class="section-title">Announcements</span>
			
			<h3 class="page-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="date"><?php the_time('F j, Y'); ?></p>
			<div class="default-content">
				<?php
					// the content (pretty self explanatory huh)
					the_content();
				?>
			</div>
		</div>
	<?php endwhile; ?>
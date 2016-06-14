<?php
/*
 Template Name: Home Page

 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(''); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<header class="header hero" role="banner" itemscope itemtype="http://schema.org/WPHeader"  style="background-image: url('<?php the_post_thumbnail_url( "$full" ); ?>');">
				<div id="inner-header" class="wrap cf" >

					<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					   	<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
					    </p>
					<?php endif; ?>

					<div id="hamburger"></div>
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</nav>
					<div class="header-social"> 
						<div class="twitter"><a href="https://twitter.com/NimbleBusiness" target="_blank"><img src="wp-content/themes/NimbleBusiness/library/images/twitter.png" /></a></div>	
						<div class="facebook"><a href="https://www.facebook.com/NimbleBusiness" target="_blank"><img src="wp-content/themes/NimbleBusiness/library/images/facebook.png"/></a></div>	
						<div class="linkedin"><a href="https://www.linkedin.com/company/10545531" target="_blank"><img src="wp-content/themes/NimbleBusiness/library/images/linkedin.png"/></a></div>	
					</div>
					<header class="banner">
						<h1><?php the_field('banner_text'); ?></h1>
						
						<span class="cta">
							<a href="/contact" ><?php the_field('banner_call_to_action'); ?></a>
						</span>
					</header>

				</div>


			</header>


			<div id="content">

				<div id="inner-content">
					

					<div class="primary-content">
						<div class="primary-section">
							<h1><?php the_field('primary_content_header'); ?></h1>
							<p><?php the_field('primary_content'); ?></p>
						</div>
					</div>

					
					<div class="services-processes">

						
						<div class="services">
							
							<div class="service-slides">

								<div class="slide">
									<div class="slide-copy">
										<span class="section-title">Our Services</span>
										<h3><?php the_field('slide_one_header'); ?></h3>

										<?php $excerpt = wp_trim_words( the_field('slide_one_description' ), $num_words = 10, $more = '...' ); ?>

									</div>
									<div class="slide-image" style="background-image:url('<?php the_field("slide_one_image"); ?>');"></div>
								</div>

								<div class="slide">
									<div class="slide-copy">
										<span class="section-title">Our Services</span>
										<h3><?php the_field('slide_two_header'); ?></h3>
										<?php the_field('slide_two_description'); ?>

									</div>
									<div class="slide-image" style="background-image:url('<?php the_field("slide_two_image"); ?>');"></div>
								</div>
								<div class="slide">
									<div class="slide-copy">
										<span class="section-title">Our Services</span>
										<h3><?php the_field('slide_three_header'); ?></h3>
										<?php the_field('slide_three_description'); ?>
									</div>
									<div class="slide-image" style="background-image:url('<?php the_field("slide_three_image"); ?>');"></div>
								</div>
								<div class="slide">
									<div class="slide-copy">
										<span class="section-title">Our Services</span>
										<h3><?php the_field('slide_four_header'); ?></h3>
										<?php the_field('slide_four_description'); ?>
									</div>
									<div class="slide-image" style="background-image:url('<?php the_field("slide_four_image"); ?>');"></div>
								</div>
								<div class="slide">
									<div class="slide-copy">
										<span class="section-title">Our Services</span>
										<h3><?php the_field('slide_five_header'); ?></h3>
										<?php the_field('slide_five_description'); ?>
									</div>
									<div class="slide-image" style="background-image:url('<?php the_field("slide_five_image"); ?>');"></div>
								</div>
							</div>
						</div>

						<div class="our-process">
							<div class="process-copy">	
								<span class="section-title">Our Process</span>
								<h3><?php the_field('our_process_header'); ?></h3>
								<p><?php the_field('our_process_description'); ?></p>
							</div>
							<div class="process-image">
								<img src="<?php the_field('our_process_image'); ?>">
							</div>	

						</div>

					</div>
					

					<div class="updates-NimbleBusiness">
						<div class="updates-section">
							<span class="section-title">Updates from NimbleBusiness</span>
						</div>
						<?php $temp_query = clone $wp_query; ?>
						
						<div class="updates-top">
							<div class="announcements"><?php include 'announcements-query.php'; ?></div>
							<?php if ( is_active_sidebar( 'updates' ) ) : ?>
								<div class="twitter"> <?php dynamic_sidebar( 'updates' ); ?> </div>
							<?php endif; ?>
						</div>	

						<div class="updates-bottom">	

							<div class="events">
								<span class="section-title">Upcoming Events</span>
								<?php include 'event-posts.php'; ?>
							</div>	

							<div class="news-strategies">
								<div class="strategies">
									<?php include 'strategies-query.php'; ?>
								</div>
								<div class="news">
									<?php include 'news-query.php'; ?>
								</div>
							</div>

						</div>
					
						<?php $wp_query = clone $temp_query; ?>
						<?php wp_reset_postdata(); ?>

					</div>

					<div class="client-testimonials">
						<div class="testimonial">
							<span class="section-title white">what are clients are saying...</span>	
							<!-- Client Testimonial Widget -->
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('client-testimonial') ) : endif; ?>
						</div>
					</div>

					<div class="our-partners">
						<div class="partners-section">
							<div class="partner-copy">

								<!-- Partner Widget -->
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('partner') ) : endif; ?>	

							</div>	
							<div class="partner-logos">
								<!--Partnership Post Featured Images go here -->
								<?php include 'partner-logos.php'; ?>
							</div>
						</div>
					</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

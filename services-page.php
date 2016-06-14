<?php
/*
 Template Name: Services Page

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

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<header class="header hero subpage" role="banner" itemscope itemtype="http://schema.org/WPHeader"  style="background-image: url('<?php the_post_thumbnail_url( "$full" ); ?>');">
				<div id="inner-header" class="wrap cf" >
					
	
					<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					   	<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
					    </p>
					<?php endif; ?>


					<div class="burger"></div>
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
						<div class="twitter"><a href="https://twitter.com/NimbleBusiness" target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/twitter.png" /></a></div>	
						<div class="facebook"><a href="https://www.facebook.com/NimbleBusiness"  target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/facebook.png"/></a></div>	
						<div class="linkedin"><a href="https://www.linkedin.com/company/10545531"  target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/linkedin.png"/></a></div>	
					</div>
					<header class="banner">
						<h1><?php the_field('banner_header'); ?></h1>
						
						<p><?php the_field('banner_text'); ?></p>
					</header>

				</div>


			</header>


			<div id="content">

				<div id="inner-content" class="services">
					
					<div class="service-content">

						<div class="service-section">
							<div class="service-copy">
								<?php the_field('service_text_one'); ?>
							</div>
							<div class="service-image" style="background-image:url('<?php the_field('service_image_one'); ?>');"></div>
							<div class="service-copy right">
								<?php the_field('service_text_two'); ?>
							</div>
							<div class="service-image"  style="background-image:url('<?php the_field('service_image_two'); ?>');"></div>
							<div class="service-copy">
								<?php the_field('service_text_three'); ?>
							</div>
							<div class="service-image" style="background-image:url('<?php the_field('service_image_three'); ?>');"></div>
							<div class="service-copy right">
								<?php the_field('service_text_four'); ?>
							</div>	
							<div class="service-image" style="background-image:url('<?php the_field('service_image_four'); ?>');"></div>
							<div class="service-copy">
								<?php the_field('service_text_five'); ?>
							</div>
							<div class="service-image" style="background-image:url('<?php the_field('service_image_five'); ?>');"></div>
						</div>
					</div>	


					<div class="client-testimonials">
						<div class="testimonial">
							
							<span class="section-title white">what are clients are saying...</span>	

							<!-- Client Testimonial Widget -->
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('client-testimonial') ) : endif; ?>

						</div>
					</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

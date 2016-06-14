<?php
/*
 Template Name: Single Post Page Template
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="single-content">

				<header class="header hero subpage" role="banner" itemscope itemtype="http://schema.org/WPHeader" >
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
							<div class="facebook"><a href="https://www.facebook.com/NimbleBusiness" target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/facebook.png"/></a></div>	
							<div class="linkedin"><a href="https://www.linkedin.com/company/NimbleBusiness" target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/linkedin.png"/></a></div>	
						</div>

					</div>


				</header>

				<div class="wrap">

					<?php
						get_template_part( 'post-formats/format', get_post_format() );
					?>
					
				</div>

			</div>


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>














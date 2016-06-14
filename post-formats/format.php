 

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                  <?php if ( has_post_thumbnail() ) { ?>

                  <div class="header-left" style="background-image: url('<?php the_post_thumbnail_url( "$full" ); ?>');"></div>
                  
                  <div class="header-right">

                  <?php } else { ?>

                    <div class="header-full">

                  <?php } ?>

                    <div class="header-post-nav"> 
                      <?php
                          $prev_post = get_previous_post();
                          if (!empty( $prev_post )): ?>
                          <div class="header-post-previous">
                           <a href="<?php echo $prev_post->guid ?>"><img src="../wp-content/themes/NimbleBusiness/library/images/post-previous.jpg"></a>
                          </div>
                      <?php endif ?>
                      <?php
                          $next_post = get_next_post();
                          if (!empty( $next_post )): ?>
                          <div class="header-post-next">
                            <a href="<?php echo get_permalink( $next_post->ID ); ?>"><img src="../wp-content/themes/NimbleBusiness/library/images/post-next.jpg"></a>
                          </div>
                      <?php endif; ?>
                    </div>

                    <span class="post-section-title section-title"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span>

                    <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                    <p class="byline entry-meta vcard">

                      <?php printf( __( '', 'bonestheme' ).' %1$s ',
                         /* the time the post was published */
                         '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                         
                      ); ?>

                    </p>

                    <div class="post-social"> 
                      <p class="section-title">Share</p>
                      <div class="twitter"><a href="https://twitter.com/NimbleBusiness" target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/twitter-green.png" /></a></div> 
                      <div class="facebook"><a href="https://www.facebook.com/NimbleBusiness" target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/facebook-green.png"/></a></div> 
                      <div class="linkedin"><a href="https://www.linkedin.com/company/10545531" target="_blank"><img src="../wp-content/themes/NimbleBusiness/library/images/linkedin-green.png"/></a></div> 
                      <div class="mail"><a href="mailto:sales@NimbleBusiness.com"><img src="../wp-content/themes/NimbleBusiness/library/images/mail-green.png"/></a></div> 
                    </div>


                  </div>

                </header> 

                <section class="entry-content cf" itemprop="articleBody">
                  <?php

                    the_content();

                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
                </section> <?php // end article section ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>

              <div class="post-navigation"> 

                <div class="post-previous">
                    
                    <?php
                    $prev_post = get_previous_post();
                    if (!empty( $prev_post )): ?>
                      <p class="section-title">Previous Post:</p>
                      <a href="<?php echo $prev_post->guid ?>"><?php echo $prev_post->post_title ?></a>
                    <?php endif ?>
                </div>

                <div class="post-next">
                    
                    <?php
                    $next_post = get_next_post();
                    if (!empty( $next_post )): ?>
                      <p class="section-title">Next Post:</p>
                      <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
                    <?php endif; ?>
                </div>

              </div>
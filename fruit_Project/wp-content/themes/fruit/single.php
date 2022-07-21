<?php get_header(); ?>





    <!-- ==========================  Banner Section ================== -->
    <?php
            $fruitBanner = new WP_Query (array(
              'post_type' => 'banner',
              'posts_per_page' => -1
              ));
      ?>
      <?php 

      if( $fruitBanner->have_posts()) : while( $fruitBanner->have_posts()) : $fruitBanner->the_post();
      
      ?>

    <!-- ==========================  Banner Section ================== -->
    <section id="site-banner">
      <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner-img">
                <?php the_post_thumbnail('full');?>
                <div class="banner-text">
                  <h3><?php the_title();?></h3>
                  <p><?php the_content();?></p>
                  <button class="btn-warning">get first</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif;?>
  <!-- ==========================End  Banner Section ================== -->

  <!-- ==========================  Blog Section Start ================== -->
    <section class="blog-section section">
      <div class="container">
        <div class="row">
          <div class="blog row">
            <div class="col-sm-12 col-md-8">
            <?php if(have_posts()): while(have_posts()): the_post();?>

              <div class="blog-list blog-list1">
                <div class="blog-thumb">
                <?php echo the_post_thumbnail();?>
                </div>
                <div class="blog-text">
                  <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                  <p><?php the_content();?></p>
                </div>
              </div>
              <?php endwhile; endif;
              ?>
          </div>
          <div class="col-sm-12 col-md-4">
              <div class="widget-section">
                <div class="widget-search">
                  <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>

                <div class="blog-widget blog-categorie">
                  <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
                <div class="blog-widget blog-widget-post">
                  
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
                  
                </div>

                <div class="blog-widget blog-widget-tags">
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
  <!-- ==========================  Blog Section End ================== -->

  <?php get_footer();?>

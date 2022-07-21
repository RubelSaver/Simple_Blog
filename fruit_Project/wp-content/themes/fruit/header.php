<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
  <?php wp_body_open(); ?>


  <!-- ==========================  Header Section Start ================== -->

  <header>
    <section class="top-manue">
    	<div class="container">
    		<div class="row">
    			<div class="col-xl-3 col-lg-3 col-md-3">
    				<div class="logo">
            <a href="<?php echo esc_url(home_url('/'));?>"><?php the_custom_logo();?></a>
              <h1>fruit</h1>
    				</div>
    			</div>
    			<div class="col-xl-9 col-lg-9 col-md-9">

    				<div class="manue">
						<div id="mobile-manu"></div>
            <?php wp_nav_menu(array(
                'them_location' => 'menu-1',
                'menu_class' => 'nav'
                ));?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section><!-- end-top-manue-section -->
</header> <!-- end-header-section -->
  <!-- ==========================  Header Section End ================== -->

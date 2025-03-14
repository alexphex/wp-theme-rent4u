<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Basic -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="<?php bloginfo( 'description' ); ?>" content="" />
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="sub_page">
  <?php wp_body_open(); ?>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container"> 

          <?php
            the_custom_logo();
            if ( is_page() ) :
              ?>
              <h1 class="navbar-brand"><a style="color:#FFFFFF;" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php
            else :
              ?>
              <p class="navbar-brand"><a style="color:#FFFFFF;" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php
            endif;
            $rent4u_description = get_bloginfo( 'description', 'display' );
            if ( $rent4u_description || is_customize_preview() ) :
              ?>
              <p class="site-description"><?php echo $rent4u_description; ?></p>
          <?php endif; ?>

          <div class="navbar-collapse" id="">
            <div class="user_option">
              <a href="">
                Login
              </a>
            </div>
            <div class="custom_menu-btn custom_menu-btn-page">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div class="detail-container">
                <?php 
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'container'       => 'div',
                    'container_class' => 'overlay',
                    'container_id'    => 'myNav',
                    'menu_class'      => 'overlay-content',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_container">
           <!-- Hero Slider -->
        <div class="detail_container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php for ($i = 1; $i <= 3; $i++):
                        $title = get_theme_mod("rest4u_slider_hero_title_$i", "Rent Car Experts Service");
                        $button_text = get_theme_mod("rest4u_slider_hero_button_text_$i", "Contact Us");
                        $button_url = get_theme_mod("rest4u_slider_hero_button_url_$i", "#");
                        ?>
                        <div class="carousel-item <?php echo ($i == 1) ? 'active' : ''; ?>">
                            <div class="detail-box">
                                <h1><?php echo esc_html($title); ?></h1>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

      </div>
    </section> 

    
    <!-- end slider section -->
  </div>

  
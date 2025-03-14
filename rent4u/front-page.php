<?php get_header('rent'); ?>

  <!-- book section -->
  <section class="book_section">
    <div class="form_container">

      <?php echo do_shortcode( '[vikrentcar view="vikrentcar" lang="*"]' ) ?>

    </div>
    <div class="img-box">

      <?php
        $book_img_url = carbon_get_theme_option('crb_book_block_image'); // path ID
      ?>
      <img src="<?php echo esc_url( $book_img_url ); ?>" alt="book block image">

    </div>
  </section>

  <!-- end book section -->

  <!-- car section -->

  <section class="car_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container">

      <?php
        $fav_car_title = carbon_get_theme_option('crb_favorite_car_title');
        if (!empty($fav_car_title)) {
            echo '<h2>' . esc_html($fav_car_title) . '</h2>';
        } else {
            echo  '<h2>' . 'The text field. (see theme options)' . '</h2>' . '</br>';
        }

        $fav_car_subtitle = carbon_get_theme_option('crb_favorite_car_subtitle');
        if (!empty($fav_car_subtitle)) {
            echo '<p>' . esc_html($fav_car_subtitle) . '</p>';
        } else {
            echo 'The text field. (see theme options)';
        }
      ?>

      </div>
      <div class="car_container">

        <?php
        // The Query
        $args1 = array(
            'post_type' => 'favorite_cars',
            'posts_per_page' => 3,
            'order'       => 'ASC',
        );

        $favorite_cars_query = new WP_Query( $args1 );

        // The Loop
        if ( $favorite_cars_query->have_posts() ) {
            while ( $favorite_cars_query->have_posts() ) {
                $favorite_cars_query->the_post();
                ?>

                <div class="box">
                  <div class="img-box">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <?php the_post_thumbnail();?>      
                      <?php
                    } ?>
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php the_title(); ?>
                    </h5>
                    <p>
                      <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>">
                      Read More
                    </a>
                  </div>
                </div>

                <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
            echo 'No favorite cars found.';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- end car section -->

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="img-box">

          <?php
							$about_img_url = carbon_get_theme_option('crb_about_image'); // path ID
						?>
						<img src="<?php echo esc_url( $about_img_url ); ?>" alt="about image">

          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="detail-box">

            <?php
              $about_title = carbon_get_theme_option('crb_about_title');
              if (!empty($about_title)) {
                echo '<h2>' . esc_html($about_title) . '</h2>';
              } else {
                echo  '<h2>' . 'The text field. (see theme options)' . '</h2>' . '</br>';
              }

              $about_subtitle = carbon_get_theme_option('crb_about_subtitle');
              if (!empty($about_subtitle)) {
                echo '<p>' . esc_html($about_subtitle) . '</p>';
              } else {
                echo 'The text field. (see theme options)';
              }
            ?>


            <a href="<?php echo home_url( ) . '/about' ?>">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- best section -->

  <section class="best_section">
    <div class="container">
      <div class="book_now">
        <div class="detail-box">

          <?php
            $best_car_title = carbon_get_theme_option('crb_best_car_title');
            if (!empty($best_car_title)) {
                echo '<h2>' . esc_html($best_car_title) . '</h2>';
            } else {
                echo  '<h2>' . 'The text field. (see theme options)' . '</h2>' . '</br>';
            }

            $best_car_subtitle = carbon_get_theme_option('crb_best_car_subtitle');
            if (!empty($best_car_subtitle)) {
                echo '<p>' . esc_html($best_car_subtitle) . '</p>';
            } else {
                echo 'The text field. (see theme options)';
            }
          ?>

        </div>
        <div class="btn-box">
          <a href="">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end best section -->

  <!-- rent section -->

  <section class="rent_section layout_padding">
    <div class="container">
      <div class="rent_container">

        <?php
        // The Query
        $args2 = array(
            'post_type' => 'rent_cars',
            'posts_per_page' => 6,
            'order'       => 'ASC',
        );

        $rent_cars_query = new WP_Query( $args2 );

        // The Loop
        if ( $rent_cars_query->have_posts() ) {
          while ( $rent_cars_query->have_posts() ) {
            $rent_cars_query->the_post();
            ?>
            <div class="box">
              <div class="img-box">
                <?php if ( has_post_thumbnail() ) { ?>
                    <?php the_post_thumbnail();?>      
                  <?php
                } ?>
              </div>
              <div class="price">
                <a href="<?php the_permalink(); ?>">
                  Rent $200
                </a>
              </div>
            </div>
            <?php
        }
          /* Restore original Post Data */
          wp_reset_postdata();
        } else {
            // no posts found
            echo 'No best cars found.';
        }
        ?>

      </div>
      <div class="btn-box">
        <a href="">
          See More
        </a>
      </div>
    </div>
  </section>


  <!-- end rent section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">

        <?php
          $blog_title = carbon_get_theme_option('crb_blog_title');
          if (!empty($blog_title)) {
              echo '<h2>' . esc_html($blog_title) . '</h2>';
          } else {
              echo  '<h2>' . 'The text field. (see theme options)' . '</h2>' . '</br>';
          }

          $blog_subtitle = carbon_get_theme_option('crb_blog_subtitle');
          if (!empty($blog_subtitle)) {
              echo '<p>' . esc_html($blog_subtitle) . '</p>';
          } else {
              echo 'The text field. (see theme options)';
          }
        ?>

      </div>
    </div>
    <div class="blog_container">
      <div class="layout_padding2-top">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <?php
            // The Query
            $args3 = array(
                'post_type' => 'blog',
                'posts_per_page' => -1,
                'order'       => 'ASC',
            );

            $blog_query = new WP_Query( $args3 );

            // The Loop
            if ( $blog_query->have_posts() ) {
              while ( $blog_query->have_posts() ) {
                $blog_query->the_post();
                ?>

                <div class="item">
                  <div class="box">
                    <div class="date-box">
                      <h6>
                        <?php echo get_the_date(); ?>
                      </h6>
                    </div>
                    <div class="img-box">
                      <?php if ( has_post_thumbnail() ) { ?>
                          <?php the_post_thumbnail();?>      
                        <?php
                      } ?>
                    </div>

                    <div class="detail-box">
                      <h5>
                        <?php the_title(); ?>
                      </h5>
                        <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
                <?php
            }
              /* Restore original Post Data */
              wp_reset_postdata();
            } else {
                // no posts found
                echo 'No blog posts found.';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- us section -->

  <section class="us_section">
    <div class="container">
      <div class="heading_container">

        <?php
          $us_title = carbon_get_theme_option('crb_us_title');
          if (!empty($us_title)) {
              echo '<h2>' . esc_html($us_title) . '</h2>';
          } else {
              echo  '<h2>' . 'The text field. (see theme options)' . '</h2>' . '</br>';
          }

          $us_subtitle = carbon_get_theme_option('crb_us_subtitle');
          if (!empty($us_subtitle)) {
              echo '<p>' . esc_html($us_subtitle) . '</p>';
          } else {
              echo 'The text field. (see theme options)';
          }
        ?>

      </div>
    </div>
    <div class="us_container layout_padding2">
      <div class="content_box">

        <div class="box">
          <div class="img-box">

            <?php
              $us_icon_1 = carbon_get_theme_option('crb_us_icon_1');
              if (!empty($us_icon_1)) { ?>
                  <img src='<?php echo esc_url( $us_icon_1 ); ?>'>
                <?php
              } else {
                  echo  '<p class="us_title_icon">' . 'Add icon. (theme opt.)' . '<p>' . '</br>';
              }
            ?>

          </div>
          <div class="detail-box">

            <?php
              $us_title_icon_1 = carbon_get_theme_option('crb_us_title_icon_1');
              if ( !empty($us_title_icon_1) ) { 
                  echo '<h5 class="us_title_icon">' . $us_title_icon_1 . '</h5>';
              } else {
                  echo '<p class="us_title_icon">' . 'Add title. (theme opt.)' . '<p>' . '</br>';
              } 
              
            ?>

          </div>
        </div>
        <div class="box">
          <div class="img-box">

            <?php
              $us_icon_2 = carbon_get_theme_option('crb_us_icon_2');
              if (!empty($us_icon_2)) { ?>
                  <img src='<?php echo esc_url( $us_icon_2 ); ?>'>
                <?php
              } else {
                  echo  '<p class="us_title_icon">' . 'Add icon. (theme opt.)' . '<p>' . '</br>';
              }
            ?>

          </div>
          <div class="detail-box">

            <?php
              $us_title_icon_2 = carbon_get_theme_option('crb_us_title_icon_2');
              if ( !empty($us_title_icon_2) ) { 
                  echo '<h5 class="us_title_icon">' . $us_title_icon_2 . '</h5>';
              } else {
                  echo '<p class="us_title_icon">' . 'Add title. (theme opt.)' . '<p>' . '</br>';
              } 
              
            ?>

          </div>
        </div>
        <div class="box">
          <div class="img-box">

            <?php
              $us_icon_3 = carbon_get_theme_option('crb_us_icon_3');
              if (!empty($us_icon_3)) { ?>
                  <img src='<?php echo esc_url( $us_icon_3 ); ?>'>
                <?php
              } else {
                  echo  '<p class="us_title_icon">' . 'Add icon. (theme opt.)' . '<p>' . '</br>';
              }
            ?>

          </div>
          <div class="detail-box">

            <?php
              $us_title_icon_3 = carbon_get_theme_option('crb_us_title_icon_3');
              if ( !empty($us_title_icon_3) ) { 
                  echo '<h5 class="us_title_icon">' . $us_title_icon_3 . '</h5>';
              } else {
                  echo '<p class="us_title_icon">' . 'Add title. (theme opt.)' . '<p>' . '</br>';
              } 
              
            ?>

          </div>
        </div>
        <div class="box">
          <div class="img-box">

            <?php
              $us_icon_4 = carbon_get_theme_option('crb_us_icon_4');
              if (!empty($us_icon_4)) { ?>
                  <img src='<?php echo esc_url( $us_icon_4 ); ?>'>
                <?php
              } else {
                  echo  '<p class="us_title_icon">' . 'Add icon. (theme opt.)' . '<p>' . '</br>';
              }
            ?>

          </div>
          <div class="detail-box">

            <?php
              $us_title_icon_4 = carbon_get_theme_option('crb_us_title_icon_4');
              if ( !empty($us_title_icon_4) ) { 
                  echo '<h5 class="us_title_icon">' . $us_title_icon_4 . '</h5>';
              } else {
                  echo '<p class="us_title_icon">' . 'Add title. (theme opt.)' . '<p>' . '</br>';
              } 
              
            ?>

          </div>
        </div>

      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end us section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">

      <?php
          $customer_title = carbon_get_theme_option('crb_customer_title');
          if (!empty($customer_title)) {
              echo '<h2>' . esc_html($customer_title) . '</h2>';
          } else {
              echo  '<h2>' . 'The text field. (see theme options)' . '</h2>' . '</br>';
          }

          $customer_subtitle = carbon_get_theme_option('crb_customer_subtitle');
          if (!empty($customer_subtitle)) {
              echo '<p>' . esc_html($customer_subtitle) . '</p>';
          } else {
              echo 'The text field. (see theme options)';
          }
        ?>

      </div>
      <div class="layout_padding2-top">
        <div class="carousel-wrap ">
          <div class="owl-carousel">

            <?php
            // The Query
            $args4 = array(
                'post_type' => 'testimonials',
                'posts_per_page' => -1,
                'order'       => 'DESC',
            );

            $testimonials_query = new WP_Query( $args4 );

            // The Loop
            if ( $testimonials_query->have_posts() ) {
              while ( $testimonials_query->have_posts() ) {
                $testimonials_query->the_post();
                ?>

                <div class="item">
                  <div class="box">
                    <div class="detail-box">
                      <?php the_content(); ?>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail();?>      
                          <?php
                        } ?>                      </div>
                      <div class="name">
                        <h6>
                         <?php the_title(); ?>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
            }
              /* Restore original Post Data */
              wp_reset_postdata();
            } else {
                // no posts found
                echo 'No testimonial posts found.';
            }
            ?>


          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">

        <?php 
          $contact_title = carbon_get_theme_option('crb_contact_title');
          if (!empty($contact_title)) {
              echo '<h2>' . esc_html($contact_title) . '</h2>';
          } else {
              echo  '<h2>' . 'The text field. (see theme options)' . '</h2>' . '</br>';
          }
        ?>

      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">

            <!-- Contact Form -->
            <?php echo do_shortcode( '[contact-form-7 id="e21a65b" title="Contact Form rent4u"]' ); ?>

          </div>
        </div>
      </div>

      <div class="contact_items">

        <div class="">
          <?php 
            $contact_location = carbon_get_theme_option('crb_contact_location');
            if (!empty($contact_location)) {
                echo '<h6>' . esc_html($contact_location) . '</h6>';
            } else {
                echo  '<h6>' . 'Enter location. (see theme options)' . '</h6>' . '</br>';
            }
          ?>
        </div>

        <div class="">
          <?php 
            $contact_phone = carbon_get_theme_option('crb_contact_phone');
            if (!empty($contact_phone)) {
                echo '<h6>' . esc_html($contact_phone) . '</h6>';
            } else {
                echo  '<h6>' . 'Enter phone nr.. (see theme options)' . '</h6>' . '</br>';
            }
          ?>
        </div>

        <div class="">
          <?php 
            $contact_email = carbon_get_theme_option('crb_contact_email');
            if (!empty($contact_email)) {
                echo '<h6>' . esc_html($contact_email) . '</h6>';
            } else {
                echo  '<h6>' . 'Enter phone nr.. (see theme options)' . '</h6>' . '</br>';
            }
          ?>
        </div>

      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- map section -->

  <section class="map_section">

    <!-- map section -->
    <div class="map_container">
      <div class="map-responsive">
        
        <?php
        // Get a link to the map from the theme options
        $google_map_link = carbon_get_theme_option('google_map_link');

        if ($google_map_link): ?>
            <div style="width: 100%; height: 400px;">
                <iframe 
                    src="<?php echo esc_url($google_map_link); ?>" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        <?php else: ?>
            <p>The link to the map is not specified. Add it in the Theme Options.</p>
        <?php endif; ?>

      </div>
    </div>
  </section>


  <!-- end map section -->

<?php get_footer('rent'); ?>
<?php
/**
 * Template Name: Cars Page
 * Description: A custom template for displaying a unique layout.
 *
 * @package Your_Theme_Name
 */

get_header('page'); ?>

<div class="wrapper">
	<div class="content-page">

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
    



	</div>
</div>
<?php
get_footer('rent');

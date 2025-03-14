<?php
/**
 * Template Name: Blog Page
 * Description: A custom template for displaying a unique layout.
 *
 * @package Your_Theme_Name
 */

get_header('page'); ?>

<div class="wrapper">
	<div class="content-page">

     <!-- Blog Section start -->
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
     <!-- Blog Section end -->
        
	</div>
</div>
<?php
get_footer('rent');

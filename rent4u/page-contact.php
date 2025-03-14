<?php
/**
 * Template Name: Contact Page
 * Description: A custom template for displaying a unique layout.
 *
 * @package Your_Theme_Name
 */

get_header('page'); ?>

<div class="wrapper">
	<div class="content-page">

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

        
	</div>
</div>
<?php
get_footer('rent');

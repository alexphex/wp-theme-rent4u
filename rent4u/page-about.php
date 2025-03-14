<?php
/**
 * Template Name: About Page
 * Description: A custom template for displaying a unique layout.
 *
 * @package Your_Theme_Name
 */

get_header('page'); ?>

<div class="wrapper">
	<div class="content-page">
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
					</a>					</div>
				</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php
get_footer('rent');

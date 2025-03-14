<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rent4u
 */

get_header( 'rent' );
?>

	<section class="section_404 layout_padding">

		<div class="container">
	      <div class="heading_container">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'rent4u' ); ?></h1>
			</header><!-- .page-header -->
		  </div>
		</div>

		<div class="us_container layout_padding2">
			<div class="content_box"> 
				<p class="section_404_answer"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'rent4u' ); ?></p>

				<div class="search_form_404">
					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>
				</div>

				<div class="search_form_404_archive">
					<?php
					/* translators: %1$s: smiley */
					$rent4u_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'rent4u' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$rent4u_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>
				</div>
				

			</div>



		</div><!-- .page-content -->
	</section><!-- .error-404 -->


<?php
get_footer('rent');

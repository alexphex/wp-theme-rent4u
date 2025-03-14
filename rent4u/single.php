<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rent4u
 */

get_header('page');
?>

<div class="wrapper">
	<div class="content-page">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );


	endwhile; // End of the loop.
	?>
	
	</div>
</div>
<?php
get_footer('rent');

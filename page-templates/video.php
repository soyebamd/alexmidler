<?php
/**
 * Template Name: Videos
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" >

			<div id="alex-video">



				<h1 class="h1"> Videos </h1>


				<div class="row">

<?php



// WP_Query arguments
$args = array ( 'posts_per_page' => -1, 'post_type' => 'videos');


// The Query
$video = new WP_Query( $args );



?>

			<?php while ( $video->have_posts() ) : $video->the_post(); ?>
				

				<?php get_template_part( 'video' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div></div><!-- #content -->
	</div></div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
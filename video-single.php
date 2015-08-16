<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	
    <article id="post-<?php the_ID(); ?>" class="single-video">




<div class="alex-thumb single">
<iframe width="560" height="315" src="<?php the_field('youtube_url'); ?>?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

</div>



<h3 class="h3"><?php the_title(); ?></h3>







	</article><!-- #post -->



	<div style="display:table; width:100%; height:50px;"></div>


<div class="row">

<?php



// WP_Query arguments
$args = array ( 'posts_per_page' => -1, 'post_type' => 'videos');


// The Query
$video = new WP_Query( $args );



?>

			<?php while ( $video->have_posts() ) : $video->the_post(); ?>
			


	 <article id="post-<?php the_ID(); ?>" class="video-post">

<a href="<?php the_permalink() ?>">




<div class="alex-thumb">

	<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

</div>



<h3 class="h3"><?php the_title(); ?></h3>




</a>




	</article><!-- #post -->
<?php endwhile; // end of the loop. ?>

</div>
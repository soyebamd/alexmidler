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

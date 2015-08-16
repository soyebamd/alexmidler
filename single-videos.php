<?php

get_header(); ?>

	<div id="primary" class="site-content">

		<div id="content" role="main" >


			<div id="alex-video">



				<h1 class="h1"> Videos </h1>

<?php






?>

			<?php while (have_posts() ) : the_post(); ?>
				

				<?php get_template_part( 'video', 'single' ); ?>



				<?php //get_template_part( 'video'); ?>




			<?php endwhile; // end of the loop. ?>

		</div></div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
        <?php /*?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
            <?php */?>
 
 <div class="latestVideo">
 <h2>The Latest Videos</h2> <div class="viweAll"><a href="<?php echo esc_url( home_url( '/' ) ); ?>gallery/">View All</a></div></div>
           <div class="postMainRow"><?php  
			$args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'video_posts', 'orderby' => 'post_date', 'order'=> 'ASC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="mainContent">
           <?php $video =  explode('=',get_field('video_url'));
							$video_count = count($video)-1;
							/*echo $video_count;
							echo $video[$video_count];*/
							?>
          <iframe width="265" height="143" src="//www.youtube.com/embed/<?php echo $video[$video_count]; ?>" frameborder="0" allowfullscreen></iframe>
          
         <div class="postMain"> <div class="postTitle"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></div>
          
         <div class="postContent"> <?php echo wp_trim_words( get_the_content(), 24 ); ?> </div></div>
         </div>
         <?php endwhile; ?></div>
         
      
        <!-- <div class="latestVideo">   <h2>Latest News</h2> <div class="viweAll"><a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>">View All</a></div> </div>

          <div class="postCatRow"> <?php  
			$args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'news' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
                       
			<div class="postCat">
             <a href="<?php the_permalink();?>" style="display:block;"> 

            <div class="postCatImage">
           <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); } ?>
           </div>
                    
          <div class="postCatInfo"><div class="postCatTitle"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></div>
          <div class="postCatDate"><?php the_time('F j, Y') ?></div>
         <div class="postCatContent"> <?php echo wp_trim_words( get_the_content(), 24 ); ?> <a class="readMore" href="<?php the_permalink();?>"> READ MORE </a> </div></div>
           </a>
         </div>
         
       
         
         <?php endwhile; ?></div> -->

		</div><!-- #content -->
        
        
	</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
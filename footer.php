<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?>
</div>
<!-- #main .wrapper -->
<?php

    if(is_page('home')) {  ?>

<div class="logoSlideWrap">
  <?php

    //echo do_shortcode('[jw_easy_logo slider_name="Footer Logo Slider"]'); ?>
  <a href="http://www.volcom.com/" title="volcome"> <img src="<?php bloginfo('template_directory'); ?>/images/volcom_a.png" class="easy-logo_image" alt="" title="sponsor"> </a> <a href="http://www.redbull.com/" title="redbull"> <img src="<?php bloginfo('template_directory'); ?>/images/redbull_a.png" class="easy-logo_image" alt="" title="redbull"></a> <a href="http://gopro.com/" title="gopro"> <img src="<?php bloginfo('template_directory'); ?>/images/gopro.png" class="easy-logo_image" alt="" title="valsurf"> </a> <a href="http://www.realskateboards.com/" title="realskateboards"> <img src="<?php bloginfo('template_directory'); ?>/images/realskateboards.jpg" class="easy-logo_image" alt="realskateboards" title="valsurf"> </a> <a href="http://www.nike.com/" title="nike"> <img src="<?php bloginfo('template_directory'); ?>/images/nike_a.png" class="easy-logo_image" alt="nike" title="nike"> </a> <a href="http://spitfirewheels.com/" title="spitfirewheels"> <img src="<?php bloginfo('template_directory'); ?>/images/spitfire_a.png" class="easy-logo_image" alt="" title="spitfirewheels"> </a> <a  href="http://www.thundertrucks.com/" title="thundertrucks"> <img src="<?php bloginfo('template_directory'); ?>/images/thunder_a.png" class="easy-logo_image" alt="" title="thunder"> </a> <a href=" http://bones.com/" title="bones"> <img src="<?php bloginfo('template_directory'); ?>/images/boner_a.png" class="easy-logo_image" alt="bones" title="bones"> </a>  <a href="http://www.valsurf.com/" title="valsurf"> <img src="<?php bloginfo('template_directory'); ?>/images/valsurf.png" class="easy-logo_image" alt="" title="valsurf"> </a> <a href="http://www.skatelab.com/" title="skatelab"> <img src="<?php bloginfo('template_directory'); ?>/images/skatelab_a.png" class="easy-logo_image" alt="" title="skatelab"> </a> </div>
<div class="aboveFooter">
  <?php dynamic_sidebar('above_footer');  ?>
</div>
<?php } ?>
<div class="footerWrap">
  <div class="footerMain">
    <div class="footer1">
      <?php dynamic_sidebar('footer-1'); ?>
    </div>
    <div class="footer2">
      <?php dynamic_sidebar('footer-2'); ?>

<br>

<div style="clear:both; padding-top:10px;">

<?php echo do_shortcode('[aps-counter]');?>


</div>


    </div>
    <footer id="colophon" role="contentinfo">
      <div class="site-info">
        <?php do_action( 'twentytwelve_credits' ); ?>
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>">
        <?php //printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?>
        </a>
        <?php dynamic_sidebar('footer'); ?>
      </div>
      <!-- .site-info -->
    </footer>
    <!-- #colophon -->
  </div>
  <div style="clear:both;"></div>
</div>
</div>
<!-- #page -->
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>

<script>

$(document).ready(



				  
				  function(){




	$( ".video-post:nth-child(3n)" ).after("<div style='clear:both;'></div>");



					  
					    $('#header-img').bxSlider({
											  
											  		mode: 'horizontal',
													pager: true,
													controls: false,
													auto: false,
													pause: 6000,
													 autoStart: false  ,
													 adaptiveHeight:true
													
											  
											  });
						
						
						
						var video_height = $('.header-image').height();
						
						
						
						
						$('iframe#video-h').css({height:video_height+"px"});




//add placeholder to textbox

$('#frm-email').attr( "placeholder","Enter Your Email..." );
					  
					  
					  
					  }
				  
				  );

</script>


</body></html>
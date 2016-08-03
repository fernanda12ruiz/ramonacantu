<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ramonacantu
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ramonacantu' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ramonacantu' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ramonacantu' ), 'ramonacantu', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Scripts -->
<script src="../js/jquery.js"></script>
<script src="../js/slick/slick.min.js"></script>
<script src="../js/slick/slick.js"></script>
<script src="../js/app.js"></script>
<script>
$(document).ready(function(){

  $('.index-slider').slick({
    arrows: false,
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 1500,
    fade: true,
    cssEase: 'linear'
  });

  $('.timeline-slider').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: true
  });

  if (windowSize < 415){
    $('.timeline-slider').slick({
      slidesToShow: 1
    });
  }

  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
  
});
</script>
<!-- /Scripts -->

</body>
</html>

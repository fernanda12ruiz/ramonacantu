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

<!-- Footer -->
<footer class="footer" role="contentinfo">
  <div class="green">
    <div class="footer-info">
      <h5>VÍA GALVANI 214. FUENTES DEL VALLE<br>
      SAN PEDRO GARZA GARCÍA<br>
      N.L. MÉXICO</h5>

      <a href="tel:+52-811-133-2473" class="phone">1133-2473</a>
      <a href="tel:+52-818-253-1778" class="phone">+52 (81) 8253-1778</a>
    </div>
      <div class="footer-links">
        <ul class="social">
          <li><a href="https://www.linkedin.com/in/ramona-i-cant%C3%BA-westendarp-873611a" target="_blank">LINKEDIN</a></li>
          <li><a href="https://www.facebook.com/ramonacantu" target="_blank">FACEBOOK</a></li>
          <li><a href="https://twitter.com/ramonacantu" target="_blank">TWITTER</a></li>
        </ul>

        <ul class="social">
          <li><a href="/blog" target="_blank">BLOG</a></li>
          <li><a href="https://plus.google.com/u/0/116555482627484807607/posts" target="_blank">GOOGLE +</a></li>
        </ul>
      </div>

      <div class="gray">
        <p>Ramona Isabel Cantú Westendarp <?php echo date('Y'); ?></p>
      </div>
  </div>

  <div class="footer-contacto">
    <a href="/contacto.html">DUDAS Y CONTACTO</a>
  </div>

  <a href="#top" rel="" id="anchor1" class="scroll-top anchorLink">
    <img src="../images/back-top.svg">
  </a>
</footer>

<!--// End Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php
$la_url = 'http://' . $_SERVER['SERVER_NAME'];
?>
<!-- Scripts -->
<script src="<?php echo $la_url; ?>/js/jquery.js"></script>
<script src="<?php echo $la_url; ?>/js/slick/slick.min.js"></script>
<script src="<?php echo $la_url; ?>/js/slick/slick.js"></script>
<script src="<?php echo $la_url; ?>/js/app.js"></script>
<script>
  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,

    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
</script>
<!-- /Scripts -->

</body>
</html>

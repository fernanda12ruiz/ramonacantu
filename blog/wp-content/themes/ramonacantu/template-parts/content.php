<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ramonacantu
 */

?>

<!-- Post numbe -->
<?php $currentID = get_the_ID(); ?>
<?php $currentNumber = Get_Post_Number($currentID); ?>
<!-- /Post numbe -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <a href="<?php the_permalink(); ?>">
		 <div class="thumb">
	      <?php the_post_thumbnail(); ?>
	      <div class="thumb-hover">
	        <p><?php echo $currentNumber; ?></p>
	        <hr>
	      </div>
	    </div>
	    <div class="thumb-info">
				<?php the_title( '<h4>', '</h4>' ); ?>
      </div>
	</a>
</article><!-- #post-## -->



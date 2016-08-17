<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ramonacantu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <a href="<?php the_permalink(); ?>">
		 <div class="thumb">
	      <?php the_post_thumbnail(); ?>
	      <div class="thumb-hover">
	        <p><?php the_ID(); ?></p>
	        <hr>
	      </div>
	    </div>
	    <div class="thumb-info">
				<?php the_title( '<h4>', '</h4>' ); ?>
      </div>
	</a>
</article><!-- #post-## -->
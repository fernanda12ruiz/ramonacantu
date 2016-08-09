<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ramonacantu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div id="post">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="art-title">
			<?php the_title( '<h2 class="entry-title">', '<span><hr></span></h2>' ); ?>
		  </div>
		  <div class="post-info">
		  	<div class="imagen">
		      <?php the_post_thumbnail('post-thumb'); ?>
		    </div>
		    <div class="autor">
		    	<p>POR <?php the_author(); ?></p>
		    </div>
		    <div class="texto">
		    	<?php the_content(); ?>
		    </div>
		  </div><!-- .post-info -->
		  <?php endwhile; ?>
			<div class="more">
				<ul class="lista-posts">
					<?php
						$args = array( 'numberposts' => '10' );
						$recent_posts = wp_get_recent_posts();
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . '<span>'. $recent["ID"] .'</span>' .   $recent["post_title"].'</a> </li> ';
						}
					?>
				</ul>
			</div>
		</div><!-- #post -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ramonacantu
 */

get_header(); ?>
	<div class="main-text blog-text">
	  <h4>A través del psicoanálisis como cuerpo teórico y método clínico propongo ciertas reflexiones.</h4>
	  <hr>
	</div><!-- .blog-text -->
	<div class="main-text gray blog-intro">
	  <h2>Este blog contiene un revoltijo de artículos, 
	  algunos fueron escritos para un lector especializado, y otros para un lector con curiosidad por temas sobre: <span>Psicoanálisis, psicoterapia, y psicología.</span></h2>
	</div><!-- .blog-intro -->

	<div id="primary" class="content-area post-list">
		<main id="main" class="site-main" role="main">
			<div class="art-title" id="blog-list">
		    <h2>Artículos <span><hr></span></h2>
		  </div><!-- .art-title -->
		  <div class="posts">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
		 <div class="pagination">
				<div class="nav-next"><?php previous_posts_link( '&#10094;' ); ?></div>
				<div class="nav-previous"><?php next_posts_link( '&#10095;' ); ?></div>
			</div><!-- .pagination -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Minimalism
 */

get_header(); ?>
	<div class="container">
		<section class="feature-image feature-image-default-alt">
			<h1 class="page-title"></h1></br></br></h1>
		</section>
	</div>
	<div class="container">
		<div id="primary" class="row">
			
			<main id="content" class="col-sm-8">

		<?php
		if ( have_posts() ) : ?>

			<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'minimalism' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
			<?php get_sidebar(); ?>
			</aside>
			
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>

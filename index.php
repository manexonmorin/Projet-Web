<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TIMfilp
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="bulleIntera">
		<svg class="bulle1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
			<path fill="#F2F4F8" d="M48.1,-55.4C62.2,-45.6,73.2,-30.2,74.4,-14.4C75.7,1.4,67.1,17.6,58.4,34.5C49.6,51.5,40.6,69.1,26.5,75.3C12.4,81.6,-6.8,76.5,-14.2,63.3C-21.7,50.1,-17.4,28.8,-24.7,14.9C-32,0.9,-51,-5.7,-54.8,-14.2C-58.7,-22.7,-47.6,-33.1,-36,-43.3C-24.3,-53.5,-12.2,-63.6,2.4,-66.5C17,-69.4,34.1,-65.2,48.1,-55.4Z" transform="translate(100 100)" />
			<!-- ­<text>Technique d'intégration Multimédia</text> -->
		</svg>

		<svg class="bulle2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
			<path fill="#F2F4F8" d="M26.3,-35.5C38.3,-27.5,55.3,-25.5,63.3,-16.8C71.3,-8.1,70.3,7.2,63.5,18.3C56.7,29.3,43.9,36.1,32.4,39.9C20.8,43.6,10.4,44.3,1.9,41.6C-6.6,39,-13.1,33,-17.6,27C-22,20.9,-24.3,14.8,-34,6.1C-43.6,-2.6,-60.6,-13.9,-65.6,-28.4C-70.6,-42.9,-63.7,-60.5,-50.8,-68.3C-37.9,-76,-18.9,-73.7,-5.9,-65.6C7.1,-57.5,14.3,-43.5,26.3,-35.5Z" transform="translate(100 100)" />
		</svg>

		<svg class="bulle3" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
			<path fill="#F2F4F8" d="M30.4,-50C42.2,-39.8,56.4,-36,60.4,-27.5C64.3,-19,58.1,-5.8,52.6,5C47.1,15.9,42.4,24.3,37.3,35C32.2,45.8,26.7,58.9,16.3,67.4C5.9,76,-9.4,80,-23.6,77.3C-37.8,74.5,-51,65.1,-61.8,53.2C-72.7,41.4,-81.2,27.1,-78.8,14.1C-76.3,1.1,-62.9,-10.7,-53.2,-21.1C-43.5,-31.5,-37.6,-40.5,-29.4,-52.3C-21.2,-64.2,-10.6,-78.9,-0.6,-78C9.3,-77,18.6,-60.3,30.4,-50Z" transform="translate(100 100)" />
		</svg>
	</div>


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			the_posts_navigation();

	/*	else :

			get_template_part( 'template-parts/content', 'none' );*/

		endif;
		?>
	</main><!-- #main -->


<?php
get_sidebar();
get_footer();

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

  <!-- Balise div qui contient les particules à faire bouger -->
    <div id="particle-container">
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
    </div>

      <!-- Balise qui contient les Bulles à effet flottant -->
    <div id="bulleAnim" class="lesbulles">

      <div class="bulleIntera">
          <h1 class="titreBulle"> <span class="effetGras-bulle1" >T</span>echnique <br> <span class="effetGras-bulle1" >I</span>ntégration <br> <span class="effetGras-bulle1" >M</span>ultimédia </h1>
      </div>

      <div class="bulleIntera bulleIntera2">
        <h1 class="titreBulle titreBulle2">BIENVENUE</h1>
      </div>

      <div class="bulleIntera bulleIntera3">
      </div>
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

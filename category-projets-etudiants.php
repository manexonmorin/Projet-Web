<?php get_header();?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			</header><!-- .page-header -->
                
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'projets-etudiants' );

			endwhile;
			?>

		<?php endif;?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

<?php get_header();?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			</header><!-- .page-header -->
			<section class="contenuDesSpectacles">
			<div class="titrePage">
				<?php
					echo '<h1 class="page-title">' . single_cat_title('', false ). '</h1>';
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div>
			
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'projets-etudiants' );

			endwhile;
			?>
			
			</section><!-- fin section contenuSpectacle-->

		<?php endif;?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

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
    <!-- <div id="bulleAnim" class="lesbulles">

      <div class="bulleIntera">
          <h1 class="titreBulle"> <span class="effetGras-bulle1" >T</span>echnique <br> <span class="effetGras-bulle1" >I</span>ntégration <br> <span class="effetGras-bulle1" >M</span>ultimédia </h1>
      </div>

      <div class="bulleIntera bulleIntera2">
        <h1 class="titreBulle titreBulle2">BIENVENUE</h1>
      </div>

      <div class="bulleIntera bulleIntera3">
      </div>
    </div> -->

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

        affichageAccueil($tPropriete);

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			the_posts_navigation();

	/*	else :

			get_template_part( 'template-parts/content', 'none' );*/

		endif;
		?>
	</main><!-- #main -->

  <!-- ************************************************************* SECTION CAMMADERIE APPERCU ACCUEIL ************************************************************* -->
  <!-- <section class="un cammaderie"> -->
    <!-- <div class="conteneur_cammaderie"> -->
      <!-- <h1 class="titre_cammaderie" >CAMARADERIE</h1> -->
      <!-- <p class="text_cammaderie">
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor <br>
      invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et d diam nonumy <br> 
      eirmod tempor invidunt ut labore et dolore magnajv deg mi sola de tiuid. Demmo Aden 
      </p> -->
    <!-- </div> -->
  <!-- </section> -->

  <!-- ******************************************************** SECTION PROJET ETUDIANT APPERCU ACCUEIL ************************************************************* -->
  <!-- <section class="projet_etudiant" id="projet_etudiant"> -->

    <!-- <div id="particle-container">
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
    </div>  -->

    <!-- <div class="conteneur_titre-etudiant">

      <h1 class="titre_projet-etudiant">PROJET <br> ETUDIANT</h1>

      <div class="bulleIntera bulle_projet">
        <a class="lien_projet" href="#">Voir tout les projets</a>
      </div>

    </div>

    <div class="conteneur_bulle_projet">

      <div class="conteneur_projet projet-un"></div>
      <div class="conteneur_projet projet-deux"></div>
      <div class="conteneur_projet projet-trois"></div>
      <div class="conteneur_projet projet-quatre"></div>
      <div class="conteneur_projet projet-cinq"></div>

    </div> -->

  </section>

  <!-- ******************************************************** SECTION PROJET ETUDIANT APPERCU ACCUEIL ************************************************************* -->

    <!-- <section class="language_logiciel">
        <h1 class="titre_language_logiciel">LANGUAGES & <br> LOGICIELS</h1>

      <div class="conteneur_logiciel_language">

        <div class="bulleIntera logiciel-1 bulle_logiciel">
          <div class="sous_logi enfant3"></div>
          <div class="sous_logi enfant4"></div>
        </div>

        <div class="bulleIntera logiciel-2 bulle_logiciel">
          <div class="sous_logi enfant1"></div>
          <div class="sous_logi enfant2"></div>
        </div>

        <div class="bulleIntera logiciel-3 bulle_logiciel">
          <div class="sous_logi enfant5"></div>
          <div class="sous_logi enfant6"></div>          
        </div>

        <div class="bulleIntera logiciel-4 bulle_logiciel">
          <div class="sous_logi enfant7"></div>
          <div class="sous_logi enfant8"></div>
        </div>

        <div class="bulleIntera logiciel-5 bulle_logiciel">
          <div class="sous_logi enfant9"></div>
          <div class="sous_logi enfant10"></div>
        </div>

      </div>
    </section> -->

    <!-- ******************************************************** SECTION FUTURE APPERCU ACCUEIL ************************************************************* -->
<!-- 
    <section class="avenir">

    </section> -->

<?php
get_sidebar();
get_footer();



function affichageAccueil(&$tPropriete){
	$tPropriete['accueil'] = get_field('sectionaccueil'); // le type associer a la categorie de l'article
}
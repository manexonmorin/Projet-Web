<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TIMfilp
 */

?>

	<footer id="colophon" class="site-footer">
	 <div class="site-info">

		<!-- infosSite -->
		<div class="infosSite">
			<?php if(is_dynamic_sidebar( 'footer-1')):?>
				<?php dynamic_sidebar( 'footer-1');?>
			<?php endif;?>
		</div>

		<!-- NavFooter -->
		<div class="NavFooter">
			<?php if(is_dynamic_sidebar( 'footer-2')):?>
				<?php dynamic_sidebar( 'footer-2');?>
			<?php endif;?>
		</div>

		<!-- LocalisationFooter -->
		<div class="LocalisationFooter">
			<?php if(is_dynamic_sidebar( 'footer-3')):?>
				<?php dynamic_sidebar( 'footer-3');?>
			<?php endif;?>
		</div>
		
		<!-- ReseauxSociaux -->
		<div class="ReseauxSociaux">
			<?php if(is_dynamic_sidebar( 'footer-4')):?>
				<?php dynamic_sidebar( 'footer-4');?>
			<?php endif;?>
		</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

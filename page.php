<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * 
 * 		Modèle / Template pour toutes les Pages de la base de données autres que la page d'accueil
 *
 * @package Catch Themes
 * @subpackage Catch Kathmandu
 * @since Catch Kathmandu 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); // appel du sous-modèle content-page.php ?>

					

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>
<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<div class="block404">
				<div class="image404-container">

				</div>
				<a class="button special-font button-right" href="<?php echo site_url('/home/') ?>">Egads! Go Home!</a>
			</div>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>

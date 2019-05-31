<?php
/**

*Template Name: About
*Template Post Type: services

 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
 get_header(); ?>
TESTING page-about TESTING  page-about TESTING page-about
<header class="home-page">
	<h1 class="about-header-text">
Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.
</h1>
</header>
	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
		<h2>Our Services</h2>
		<p>We take pride in our clients and the content we create for them.
		Here’s a brief overview of our offered services.</p>

		<?php 			query_posts('post_type=services'); ?>

				<?php while ( have_posts() ) : the_post();
					$service = get_field('service');
					$service_descr = get_field('service_descr');
					$image_1 = get_field('image_icon');
					$size = "medium";
					?>
					<div class="">
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						<img src=<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
						}?>
					</div>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>

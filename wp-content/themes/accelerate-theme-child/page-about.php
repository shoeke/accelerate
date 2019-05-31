<?php
/**

*Template Name: About
*Template Post Type: services

 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
TESTING TESTING TESTING
	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$service = get_field('service');
				$service_descr = get_field('service_descr');
				$image_1 = get_field('image_icon');
				$size = "medium";
				?>
				<div class="">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				<div class="">
					<h2><?php echo $service; ?></h2>
					<p><?php echo $service_descr; ?></p>
					<img src=<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
					}?>



				</div>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the case study archive

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $services = get_field('services');
        $link = get_permalink();
        $image_1 = get_field('image_1');
        $size = "medium";?>

          <div class="case-study-sidebar">
            <a href="<?php echo $link; ?>"><h2><?php the_title(); ?></h2></a>

            <h5><?php echo $services; ?></h5>
            <h6><?php the_excerpt(); ?></h6>
            <p class="read-more-link"><a href="<?php echo $link; ?>">View Project</a></p>
          </div>

          <div class="case-study-images">
            <a href="<?php echo $link;?>">
              <img src=<?php if($image_1) {
                echo wp_get_attachment_image( $image_1, $size );
              }?>
            </a>

          </div>







			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>

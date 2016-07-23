<?php
/**
 * The template for displaying the archive of case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php query_posts($query_string . '&order=ASC'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$image_1 = get_field('image_1');
				$size = "full";
			?>
			
			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h5><?php echo $services; ?></h5>
				
					<?php the_excerpt(); ?>
					
					<p><a href="<?php the_permalink(); ?>">Visit Project</a></p>	
				</aside>

				<div class="case-study-images">
					<a href="<?php the_permalink(); ?>">
						<?php if($image_1) { ?>
							<?php echo wp_get_attachment_image( $image_1, $size ); ?>
						<?php } ?>
					</a>
				</div>
			</article>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
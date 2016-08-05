<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
				<p><span>Accelerate</span> is a strategy and marketing agency aimed at making your clients visible and building their businesses.</p>
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?>, LLC
				</div>
				
			<nav class="social-media-navigation" role="navigation">
				<ul>
					<li><a href="https://twitter.com/"><img src="/wp-content/themes/accelerate-theme-child/img/twitter.gif"></a></li>
					<li><a href="https://www.facebook.com"><img src="/wp-content/themes/accelerate-theme-child/img/facebook.gif"></a></li>
					<li><a href="https://www.linkedin.com"><img src="/wp-content/themes/accelerate-theme-child/img/linkedin.gif"></a></li>
				</ul>
			</nav>

				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
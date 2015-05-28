<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WPMarbella
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info large-12 columns">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wpmarbella' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wpmarbella' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpmarbella' ), 'wpmarbella', '<a href="http://www.iris-studio.es" rel="designer">jjmrestituto</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

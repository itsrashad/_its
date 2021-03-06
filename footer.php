<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _its
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_its' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_its' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php esc_html__( 'Theme: %1$s by %2$s.', '_its' ); ?> <a href="http://itsrashad.info/" rel="designer">itsRashad</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>
<!-- <img class="footer-svg" src="<?php echo get_template_directory_uri();?>/img/learn-rva-graphic.svg" alt=""> -->
<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-center">

							<a href="<?php  echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php printf(
							/* translators:*/
							esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
								<span class="sep"> | </span>

							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'altlab' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://altlab.vcu.edu', 'altlab')).'">ALT Lab</a>' ); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>


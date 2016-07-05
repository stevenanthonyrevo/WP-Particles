<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Particles
 */

?>

						</div><!-- #content -->
					</div><!-- .col-lg-12 col-md-12 col-xs-12 -->
				</div><!-- .container -->

				<div class="col-lg-12 col-md-12 col-xs-12">
					<footer id="colophon" class="site-footer" role="contentinfo">
						<div class="site-info">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'particles' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'particles' ), 'WordPress' ); ?></a>
							<span class="sep"> | </span>
							<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'particles' ), 'particles', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
						</div><!-- .site-info -->
					</footer><!-- #colophon -->
				</div><!-- .col-lg-12 col-md-12 col-xs-12 -->

			</div><!-- .row -->
		</div><!-- .container-fluid -->

	<?php wp_footer(); ?>

</body>
</html>

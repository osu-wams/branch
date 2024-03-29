<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Branch
 * @since Branch 1.0.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">

	<div class="section-inner">


		<div class="footer-credits">
			<a href="https://oregonstate.edu/" id="osu-logo"><img
						src="<?php echo get_stylesheet_directory_uri(); ?>/logo.svg"
						alt="Oregon State University"></a>

			<p class="footer-copyright">
				<a href="https://oregonstate.edu/copyright">&copy;
					<?php
					echo date_i18n(
					/* translators: Copyright date format, see https://www.php.net/date */
						_x( 'Y', 'copyright date format', 'twentytwenty' )
					);
					?>
					Oregon State University</a>
			</p><!-- .footer-copyright -->

		</div><!-- .footer-credits -->

		<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
			<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
		</a><!-- .to-the-top -->

	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>

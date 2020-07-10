<?php
/**
 * Footer
 *
 * Main footer file for the theme.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

	$copyright    = get_field( 'copyright', 'option' );
	$address      = get_field( 'business_street_address', 'option' );
	$address2     = get_field( 'business_city_state_zip', 'option' );
	$address_link = get_field( 'business_address_link', 'option' );
	$phone        = get_field( 'business_phone_display', 'option' );
	$phone_url    = get_field( 'business_phone_url', 'option' );
	$image        = get_field( 'footer_background_image', 'option' )
?>
<?php if ( ! is_front_page() && ! is_page( 'contact' ) && ! im_is_blog() ) : ?>
	<?php get_template_part( 'components/contact-frw' ); ?>
<?php endif; ?>
<?php if ( ! is_page( 'contact' ) ) : ?>
<section class="block block--contact-us">
	<?php if ( ! empty( $image ) ) : ?>
		<div class="image--holder">
			<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		</div>
	<?php endif; ?>
	<div class="container-fluid">
		<div class="row justify-content-center padding--section">
			<div class="col-xl-8 col-lg-10 col-12">
				<div class="contact--flex">
					<div class="item">
						<h3>Contact Us.</h3>
					</div>
					<div class="item">
						<?php if ( $phone_url && $phone ) : ?>
						<p><i class="fas fa-phone"></i> <a href="tel:<?php echo esc_attr( $phone_url ); ?>"><?php echo esc_attr( $phone ); ?></a></p>
						<?php endif; ?>
						<?php if ( $address_link && $address && $address2 ) : ?>
						<p><i class="fas fa-map-marker-alt"></i> <a href="<?php echo esc_attr( $address_link ); ?>" target="_blank">
								<?php echo esc_attr( $address ); ?>, <?php echo esc_attr( $address2 ); ?></a></p>
						<?php endif; ?>
						<?php get_template_part( 'components/social-icons' ); ?>
					</div>
				</div>
				<div class="form--holder">
					<?php echo do_shortcode( '[gravityforms id="1" title="false" description="false" ajax="true"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<footer>
	<img src="/wp-content/uploads/2020/07/Flag.png" class="flag" />
	<p>Copyright &copy; <?php echo esc_attr( gmdate( 'Y' ) ); ?> <?php echo esc_attr( $copyright ) ?: esc_attr( get_bloginfo() ); ?>. All Rights Reserved.</p>
</footer>
</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
</body>

</html>

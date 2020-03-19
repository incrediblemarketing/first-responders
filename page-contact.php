<?php
/**
 * Contact Page
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

get_header();
$address      = get_field( 'business_street_address', 'option' );
$address2     = get_field( 'business_city_state_zip', 'option' );
$address_link = get_field( 'business_address_link', 'option' );
$phone        = get_field( 'business_phone_display', 'option' );
$phone_url    = get_field( 'business_phone_url', 'option' );
$image        = get_field( 'page_header_background_image' ) ?: get_field( 'header_image', 'options' );
?>

<section class="block block--contact-page">
<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="contact--container">
					<div class="item content--1">
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : ?>
								<h1>Schedule an Appointment</h1>
								<?php the_post(); ?>
								<?php if ( $phone_url && $phone ) : ?>
									<p><i class="fas fa-phone"></i> <a href="tel:<?php echo esc_attr( $phone_url ); ?>"><?php echo esc_attr( $phone ); ?></a></p>
								<?php endif; ?>
								<?php if ( $address_link && $address && $address2 ) : ?>
									<p><i class="fas fa-map-marker-alt"></i> <a href="<?php echo esc_attr( $address_link ); ?>" target="_blank">
											<?php echo esc_attr( $address ); ?>, <?php echo esc_attr( $address2 ); ?></a></p>
								<?php endif; ?>
								<?php get_template_part( 'components/social-icons' ); ?>
							<?php endwhile; ?> 			
						<?php endif; ?>  
					</div>
					<div class="item content--2">
						<?php echo do_shortcode( '[gravityforms id="2" title="false" description="false" ajax="true"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

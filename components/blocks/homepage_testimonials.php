<?php
/**
 * Homepage Testimonials Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$top_title              = get_sub_field( 'top_title' );
$image                  = get_sub_field( 'background_image' );
$bottom_title           = get_sub_field( 'bottom_title' );
$testimonials           = get_sub_field( 'testimonials' );
$bottom_image           = get_sub_field( 'bottom_image' );
$business_phone_display = get_field( 'business_phone_display', 'options' );
$business_phone_url     = get_field( 'business_phone_url', 'options' );
?>


<div class="container-fluid">
	<div class="row padding--section content--top justify-content-center">
		<?php if ( ! empty( $image ) ) : ?>
			<div class="image--holder">
				<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			</div>
		<?php endif; ?>
		<div class="col-xl-8 col-lg-10">
			<h2 class="fade-in-bottom"><?php echo esc_attr( $top_title ); ?></h2>
			<?php if ( $business_phone_display && $business_phone_url ) : ?>
				<a class="btn btn-secondary fade-in-bottom" href="tel:<?php echo esc_attr( $business_phone_url ); ?>">Call <?php echo esc_attr( $business_phone_display ); ?></a>
			<?php endif; ?>
		</div>
	</div>
	<div class="row justify-content-center content--middle">
		<div class="col-xl-10 col-12">
			<?php if ( have_rows( 'video_testimonials' ) ) : ?>
			<div class="swiper-container testimonials--video">
				<div class="swiper-wrapper">
					<?php while ( have_rows( 'video_testimonials' ) ) : ?>
						<?php the_row(); ?>
						<?php $video_image = get_sub_field( 'video_thumbnail' ); ?>
						<?php $youtube_id = get_sub_field( 'youtube_id' ); ?>
					<div class="swiper-slide">
						<div class="image__holder--video">
							<img src="<?php echo esc_url( $video_image['sizes']['video_thumb'] ); ?>" alt="<?php echo esc_attr( $video_image['alt'] ); ?>"/>
						</div>
						<a class="popup-youtube btn-play" href="http://www.youtube.com/watch?v=<?php echo esc_attr( $youtube_id ); ?>"><i class="fas fa-play"></i></a>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row content--bottom justify-content-center">
		<?php if ( ! empty( $bottom_image ) ) : ?>
			<div class="image--holder">
				<img src="<?php echo esc_url( $bottom_image['url'] ); ?>" alt="<?php echo esc_attr( $bottom_image['alt'] ); ?>" />
			</div>
		<?php endif; ?>
		<div class="col-xl-8 col-lg-10">
				<h3 class="fade-in-bottom"><?php echo $bottom_title; ?></h3>
				<?php if ( $testimonials ) : ?>
					<div class="swiper-container testimonial--slider">
						<div class="swiper-wrapper">
							<?php foreach ( $testimonials as $post ) : ?>
								<?php setup_postdata( $post ); ?>
								<div class="swiper-slide testimonial--single">
									<?php get_template_part( 'components/svg/quote-left' ); ?>
									<h5><?php the_title(); ?></h5>
									<?php get_template_part( 'components/svg/stars' ); ?>
									<?php the_content(); ?>
								</div>
							<?php endforeach; ?>
						</div>
						<?php get_template_part( 'components/swiper-nav' ); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
		</div>
	</div>
</div>

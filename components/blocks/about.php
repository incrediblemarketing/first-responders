<?php
/**
 * Display About Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content_1   = get_sub_field( 'content_1' );
$content_2   = get_sub_field( 'content_2' );
$image       = get_sub_field( 'background_image' );
$lower_title = get_sub_field( 'lower_title' );
$gallery     = get_sub_field( 'certifications' );
?>

<?php if ( ! empty( $image ) ) : ?>
	<!--<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>-->
<?php endif; ?>

<div class="container-fluid">
<img src="/wp-content/uploads/2020/07/Flag.png" class="flag" />
	<div class="row padding--section justify-content-center">
		<div class="col-xxl-10 col-xl-10 col-md-10 content--1">
			<?php echo $content_1; ?>
			<?php if ( $gallery ) : ?>
				<div class="d-flex">
					<?php foreach ( $gallery as $gallery_image ) : ?>
								<img src="<?php echo esc_url( $gallery_image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>" />
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
		<?php if ( $content_2 ) : ?>
			<div class="col-xxl-4 col-xl-5 col-md-6 content--2">
				<?php echo $content_2; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<div class="title"><?php echo esc_attr( $lower_title ); ?></div>

<?php
/**
 * Display Homepage Gallery Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content       = get_sub_field( 'content' );
$content_title = get_sub_field( 'title' );
$image         = get_sub_field( 'image' );
?>

<?php if ( $image ) : ?>
	<div class="swiper-container homepage--gallery">
			<div class="swiper-wrapper">
		<?php foreach ( $image as $single_image ) : ?>
			<div class="swiper-slide">
				<img src="<?php echo $single_image['sizes']['hero_thumb']; ?>" />
			</div>
		<?php endforeach; ?>
				</div>
				<?php get_template_part('components/swiper-nav'); ?>
	</div>
<?php endif; ?>

<div class="container-fluid">
	<div class="row padding--section">
		<div class="col-xl-6 offset-xl-1">
			<div class="fade-in-left content--area">
				<h2><?php echo $content_title; ?></h2>
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>

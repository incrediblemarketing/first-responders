<?php
/**
 * Display Contact First Responders Wellness Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$image = get_field( 'contact_block_image', 'option' );
$text  = get_field( 'bottom_block_text' ) ?: get_field( 'contact_block_text', 'option' );
?>

<section class="block block--frw">
<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-12">
				<h2>Contact<br/>First Responders Wellness</h2>
				<?php echo $text; ?>
				<div class="line"></div>
			</div>
		</div>
	</div>
</section>

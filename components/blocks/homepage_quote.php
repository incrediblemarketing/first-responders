<?php
/**
 * Display Homepage Quote Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$quote            = get_sub_field( 'quote' );
$quote_name       = get_sub_field( 'quote_name' );
$quote_profession = get_sub_field( 'quote_profession' );
$image            = get_sub_field( 'background_image' );

?>
<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>
<div class="container-fluid">
	<div class="row justify-content-center padding--section">
		<div class="col-xl-8 col-lg-10 col-12">
			<div class="fade-in-bottom">
				<?php echo $quote; ?>
			</div>
			<div class="line"></div>
			<h5 class="fade-in-bottom"><?php echo esc_attr( $quote_name ); ?></h5>
			<h6 class="fade-in-bottom"><?php echo esc_attr( $quote_profession ); ?></h6>
		</div>
	</div>
</div>

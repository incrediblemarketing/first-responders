<?php
/**
 * Display Page Header Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content_1 = get_sub_field( 'content_1' );
$content_2 = get_sub_field( 'content_2' );
$image     = get_sub_field( 'background_image' ) ?: get_field( 'header_image', 'options' );
?>

<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container-fluid">
	<div class="row padding--section">
		<div class="col-12 px-0">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
	</div>
</div>

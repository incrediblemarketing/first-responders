<?php
/**
 * Display Two Columns No Background Image Block
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
$content_3 = get_sub_field( 'content_3' );
$content_4 = get_sub_field( 'content_4' );

$block_title = get_sub_field( 'title' );
?>

<div class="container">
	<div class="row padding--section">
		<?php if ( ! empty( $content_4 ) ) : ?>
			<div class="col-lg-6 content--1">
				<?php echo $content_3; ?>
			</div>
			<div class="col-lg-6 content--2">
				<?php echo $content_4; ?>
			</div>
			<hr/>
			<?php elseif ( ! empty( $content_3 ) ) : ?>
			<div class="col-12 content--1">
				<?php echo $content_3; ?>
			</div>
			<hr/>
		<?php endif; ?>
		<div class="col-12">
				<?php if ( $block_title ) : ?>
					<h2><?php echo esc_attr( $block_title ); ?></h2>
				<?php endif; ?>
		</div>
		<?php if ( ! empty( $content_2 ) ) : ?>
			<div class="col-lg-6 content--1">
				<?php echo $content_1; ?>
			</div>
			<div class="col-lg-6 content--2">
				<?php echo $content_2; ?>
			</div>
		<?php else : ?>
			<div class="col-12 content--1">
				<?php echo $content_1; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

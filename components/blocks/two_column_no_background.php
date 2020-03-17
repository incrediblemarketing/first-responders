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

$content_1   = get_sub_field( 'content_1' );
$content_2   = get_sub_field( 'content_2' );
$block_title = get_sub_field( 'title' );
?>

<div class="container">
	<div class="row padding--section">
		<div class="col-lg-6 content--1">
			<h2><?php echo esc_attr( $block_title ); ?></h2>
			<?php echo $content_1; ?>
		</div>
		<div class="col-lg-6 content--2">
			<?php echo $content_2; ?>
		</div>
	</div>
</div>

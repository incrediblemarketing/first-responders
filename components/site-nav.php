<?php
/**
 * Display Site Nav
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

?>

<nav class="site-nav">
	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php get_template_part( 'components/svg/logo' ); ?>
	</a>

	<?php get_template_part( 'components/call' ); ?>
	<button data-toggle="menu">
		<p>Menu</p>
		<img src="/wp-content/uploads/2020/07/small-flag.png" class="logo-flag" />
	</button>
</nav>

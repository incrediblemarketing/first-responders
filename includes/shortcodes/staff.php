<?php
/**
 * Shortcode to display staff members
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

/**
 * Staff member shortcode [staff]
 */
function shortcode_staff() {
	global $post;

	$args = array(
		'post_type'      => 'team_member',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
	);

	$staff   = new WP_Query( $args );
	$content = '';
	if ( $staff->have_posts() ) :
		while ( $staff->have_posts() ) :
			$staff->the_post();
			$content .= '<div class="block__team-member">';
			if ( has_post_thumbnail( $post->ID ) ) :
				$content .= get_the_post_thumbnail( $post->ID, 'staff_thumb' );
			else :
				$content .= '<img src="//placehold.it/350x350/#000/#fff" alt="">';
			endif;
			$content .= '<div class="content--area"><h3>' . get_the_title() . '</h3>';
			$content .= '<h5>' . get_sub_field( 'position' ) . '</h5>';
			$content .= get_the_content();
			$content .= '</div></div>';
			endwhile;
		wp_reset_postdata();
		endif;

	return $content;
}
add_shortcode( 'staff', 'shortcode_staff' );

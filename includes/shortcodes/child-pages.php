<?php
/**
 * Shortcode to display child pages
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
 * Child page shortcode [child_pages]
 */
function shortcode_child_pages() {
	global $post;

		$args = array(
			'post_type'      => 'procedure',
			'posts_per_page' => -1,
			'order'          => 'ASC',
			'orderby'        => 'menu_order',
			'post_parent'    => $post->ID,
		);

		$pages   = new WP_Query( $args );
		$content = '';
		if ( $pages->have_posts() ) :
			while ( $pages->have_posts() ) :
				$pages->the_post();
					$content .= '<h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
				if ( have_rows( 'blocks' ) ) :
					while ( have_rows( 'blocks' ) ) :
						the_row();
						if ( get_row_layout() == 'two_column_no_background' ) :
							if ( get_sub_field( 'content_3' ) ) :
								$content .= '<p>' . wp_trim_words( get_sub_field( 'content_3' ), $num_words = 50, $more = '...' ) . '</p>';
								elseif ( get_sub_field( 'content_1' ) ) :
									$content .= '<p>' . wp_trim_words( get_sub_field( 'content_1' ), $num_words = 50, $more = '...' ) . '</p>';
									endif;
								endif;
							endwhile;
						endif;
						$content .= '<a href="' . get_the_permalink() . '" class="btn btn-secondary">Learn More</a>';
						$content .= '<hr class="show"/>';
				endwhile;
				wp_reset_postdata();
		endif;

		return $content;
}
add_shortcode( 'child_pages', 'shortcode_child_pages' );

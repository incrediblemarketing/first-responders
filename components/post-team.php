<?php
/**
 * Display Team Post
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
<section id="block-5e9668887da6e" class="block block-page_header ">
	<div class="image--holder">
		<img src="/wp-content/uploads/2020/04/ourstaff-1920x1080.jpg" alt="">
	</div>

	<div class="container-fluid">
		<div class="row padding--section">
			<div class="col-12 px-0">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<section class="block block--blog-single">
	<article class="post row" id="post-<?php the_ID(); ?>">
		<div class="container">
			<div class="row ">
				<div class="col-12">
					<div class="padding--inner">
						<?php the_post_thumbnail( 'parent_thumb', array( 'class' => 'featured-image' ) ); ?>
						<h2><?php the_title(); ?></h2>
						<h4><?php echo get_field( 'positions' ); ?></h4>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>


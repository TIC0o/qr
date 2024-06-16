<?php

/**
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('haley_post_author_function')) {

	function haley_post_author_function() { ?>

	<div class="post-author">

		<div class="author-img">
			<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
		</div>

		<div class="author-content">
			<h5><?php esc_html_e('Written by ','haley'); the_author_posts_link(); ?></h5>
			<p><?php the_author_meta('description'); ?></p>
		</div>

		<div class="clear"></div>

	</div>


<?php

	}

	add_action( 'haley_post_author', 'haley_post_author_function', 10, 2 );

}

?>

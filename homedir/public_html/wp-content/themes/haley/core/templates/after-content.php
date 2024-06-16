<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('haley_after_content_function')) {

	function haley_after_content_function() {

		if ( 
			haley_get_archive_title() || 
			is_page_template() || 
			is_search() || 
			is_home()
		) {

			the_excerpt();

		} else {

			the_content();

			if ( is_single() && haley_setting('haley_enable_author_info_box') == true ) : 

				do_action('haley_post_author');

			endif;

			the_tags( '<footer class="line"><span class="entry-info"><strong>Tags:</strong> ', ', ', '</span></footer>' );

			comments_template();

		}

	}

	add_action( 'haley_after_content', 'haley_after_content_function' );

}

?>

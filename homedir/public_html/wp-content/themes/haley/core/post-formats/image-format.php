<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('haley_image_format_function')) {

	function haley_image_format_function() {

	?>

        <div class="post-article-wrap">

            <?php

                do_action(
                    'haley_thumbnail',
                    'haley_blog_thumbnail'
                );

            ?>

            <div class="post-article">

            	<?php

            		do_action('haley_before_content', 'post');
            		do_action('haley_after_content');

            	?>

            </div>

            <div class="clear"></div>

        </div>

	<?php

	}

	add_action( 'haley_image_format', 'haley_image_format_function' );

}

?>
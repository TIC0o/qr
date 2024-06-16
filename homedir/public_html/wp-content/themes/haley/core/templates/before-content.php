<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('haley_before_content_function')) {

	function haley_before_content_function( $type = "post" ) {
		
		if ( 
			$type == 'post' && 
			( 
				haley_setting('haley_enable_post_author', true) || 
				haley_setting('haley_enable_post_date', true)
			)
		) :

			echo '<div class="post-meta">';

				if ( haley_setting('haley_enable_post_author', true) == true ) :
					
					echo '<span class="post-meta-author">';

						esc_html_e('Written by ','haley');
						echo get_the_author_posts_link();

					echo '</span>';

				endif;

				if ( haley_setting('haley_enable_post_date', true) == true ) :
					
					echo '<span class="post-meta-date">';

						echo get_the_date();

					echo '</span>';

				endif;

			echo '</div>';

		endif;
		
		if ( ! haley_is_single() ) {

			do_action('haley_get_title', 'blog' ); 

		} else {

			if ( !haley_is_woocommerce_active('is_cart') ) :
	
				if ( haley_is_single() && !is_page_template() ) :
							 
					do_action('haley_get_title', 'single');
							
				else :
					
					do_action('haley_get_title', 'blog'); 
							 
				endif;
	
			endif;

		}

		if ( $type == 'post' ) :

			echo '<div class="post-meta">';

				if ( haley_setting('haley_enable_post_category', true ) == true ) :
					
					echo '<span class="post-meta-category">'; 

						the_category(' . '); 
					
					echo '</span>';
				
				endif;

				if ( haley_setting('haley_enable_post_icon', true ) == true ) :

					echo '<span class="post-meta-icon">'; 

						echo haley_posticon();
					
					echo '</span>';
					
				endif;

			echo '</div>';

		endif;

	} 
	
	add_action( 'haley_before_content', 'haley_before_content_function' );

}

?>
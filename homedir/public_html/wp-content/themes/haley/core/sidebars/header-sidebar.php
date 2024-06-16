<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('haley_header_sidebar_function')) {

	function haley_header_sidebar_function() {

		if ( is_active_sidebar('haley-header-widget-area') ) : ?>
			
			<div id="header_sidebar" class="sidebar-area">
			
				<?php 
							
					dynamic_sidebar('haley-header-widget-area');
						
				?>
			
			</div>
				
	<?php 
	
		endif;
		
	}

	add_action( 'haley_header_sidebar', 'haley_header_sidebar_function' );

}

?>
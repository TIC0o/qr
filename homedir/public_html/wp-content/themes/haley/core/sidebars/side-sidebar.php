<?php 

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('haley_side_sidebar_function')) {

	function haley_side_sidebar_function() { 
	
	?>
    
		<div id="sidebar" class="col-md-4 sidebar-area">
                    
			<div class="post-container">

				<?php 

					if ( is_active_sidebar('haley-side-widget-area')) { 
						
						dynamic_sidebar('haley-side-widget-area');
						
					} else { 
								
						the_widget( 'WP_Widget_Archives','',
						array(	'before_widget' => '<div class="post-article widget_archive">',
								'after_widget'  => '</div>',
								'before_title'  => '<h4 class="title">',
								'after_title'   => '</h4>'
						));
			
						the_widget( 'WP_Widget_Calendar',
						array(	'title'=> esc_html__('Calendar',"haley")),
						array(	'before_widget' => '<div class="post-article widget_calendar">',
								'after_widget'  => '</div>',
								'before_title'  => '<h4 class="title">',
								'after_title'   => '</h4>'
						));
			
						the_widget( 'WP_Widget_Categories','',
						array(	'before_widget' => '<div class="post-article widget_categories">',
								'after_widget'  => '</div>',
								'before_title'  => '<h4 class="title">',
								'after_title'   => '</h4>'
						));
						
					} 
					
				?>
					
			</div>
                        
		</div>
            
	<?php 
			 
	}

	add_action( 'haley_side_sidebar', 'haley_side_sidebar_function' );

}

?>
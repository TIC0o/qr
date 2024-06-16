<?php

/**
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

new haley_metaboxes (

	'product', 
	
	array(

		array(
		
			'name' => 'Navigation',  
			'type' => 'navigation',  
			'item' => array( 
				
				'general' => esc_html__( 'Setting', 'haley') , 
					
			),   
				
			'start' => '<ul>', 
			'end' => '</ul>'),  
		
		array(
			
			'type' => 'begintab',
			'tab' => 'general',
			'element' =>
				
				array(
					'name' => esc_html__( 'Product settings','haley'),
					'type' => 'title',
				),
		
				array(
					'name' => esc_html__( 'Template','haley'),
					'desc' => esc_html__( 'Select a template for this product','haley'),
					'id' => 'haley_template',
					'type' => 'select',
					'options' => array(
						'full' => esc_html__( 'Full Width','haley'),
						'left-sidebar' =>  esc_html__( 'Left Sidebar','haley'),
						'right-sidebar' => esc_html__( 'Right Sidebar','haley'),
					),
					'std' => 'right-sidebar',
				),
		
		),
		
		array(
			'type' => 'endtab'
		),
		
	array( 'type' => 'endsection' )
	
	)
	
);

?>
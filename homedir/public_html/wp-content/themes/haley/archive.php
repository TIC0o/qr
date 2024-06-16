<?php 

	get_header();

	get_template_part('core/templates/breadcrumb'); 
	
	do_action('haley_top_section', 'archive');

	get_sidebar('header');

	if ( 
		!haley_setting('haley_category_layout') || 
		strstr(haley_setting('haley_category_layout'), 'sidebar' )
	) {
				
		get_template_part('layouts/archive', 'sidebar'); 

	} else if ( haley_setting('haley_category_layout') == 'col-md-4' ) { 

		get_template_part('layouts/archive', 'masonry'); 

	} else { 
		
		get_template_part('layouts/archive', 'classic');
			
	}

	get_footer(); 

?>
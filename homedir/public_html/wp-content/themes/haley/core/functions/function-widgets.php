<?php

if (!function_exists('haley_loadwidgets')) {

	function haley_loadwidgets() {

/*-----------------------------------------------------------------------------------*/
/* 		LOAD ALL SIDEBAR AREAS
/*-----------------------------------------------------------------------------------*/    

		register_sidebar(array(
		
			'name' => esc_html__('Side widget area','haley'),
			'id'   => 'haley-side-widget-area',
			'description'   => esc_html__('This widget area will be shown after the content.', 'haley'),
			'before_widget' => '<div id="%1$s" class="post-article  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

		register_sidebar(array(
		
			'name' => esc_html__('Scroll widget area','haley'),
			'id'   => 'haley-scroll-widget-area',
			'description'   => esc_html__('This widget area will be shown inside the scrollable sidebar.', 'haley'),
			'before_widget' => '<div id="%1$s" class="post-article  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="title-container"><h3 class="title">',
			'after_title'   => '</h3></div>'

		));

		register_sidebar(array(

			'name' => esc_html__('Header widget area','haley'),
			'id'   => 'haley-header-widget-area',
			'description'   => esc_html__('This widget area will be shown before the content.', 'haley'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

		register_sidebar(array(

			'name' => esc_html__('Bottom widget area','haley'),
			'id'   => 'haley-bottom-widget-area',
			'description'   => esc_html__('This widget area will be shown at the bottom of your content', 'haley'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Footer widget area','haley'),
			'id'   => 'haley-footer-widget-area',
			'description'   => esc_html__('This widget area will be shown after the content.', 'haley'),
			'before_widget' => '<div id="%1$s" class="col-md-3 %2$s"><div class="widget-box">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

	}

	add_action( 'widgets_init', 'haley_loadwidgets' );

}

?>
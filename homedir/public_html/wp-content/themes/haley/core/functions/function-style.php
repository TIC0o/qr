<?php 

if (!function_exists('haley_css_custom')) {

	function haley_css_custom() { 

		$css = '';

		/* =================== BEGIN PAGE WIDTH =================== */
		
		if (haley_setting('haley_screen1')) {
		
			$css .= "@media (min-width:768px) {.container{width:".esc_html(haley_setting('haley_screen1'))."px}}"; 
			$css .= "@media (min-width:768px) {.container.block{width:" . (esc_html(haley_setting('haley_screen1'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(haley_setting('haley_screen1'))-20) . "px}}"; 
		}
		
		if (haley_setting('haley_screen2')) {
			
			$css .= "@media (min-width:992px) {.container{width:".esc_html(haley_setting('haley_screen2'))."px}}"; 
			$css .= "@media (min-width:992px) {.container.block{width:" . (esc_html(haley_setting('haley_screen2'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(haley_setting('haley_screen2'))-20) . "px}}"; 
		}
		
		if (haley_setting('haley_screen3'))  {
			
			$css .= "@media (min-width:1200px){.container{width:".esc_html(haley_setting('haley_screen3'))."px}}"; 
			$css .= "@media (min-width:1200px){.container.block{width:" . (esc_html(haley_setting('haley_screen3'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(haley_setting('haley_screen3'))-20) . "px}}"; 
		}
		
		if (haley_setting('haley_screen4'))  {
			
			$css .= "@media (min-width:1400px){.container{width:".esc_html(haley_setting('haley_screen4'))."px}}"; 
			$css .= "@media (min-width:1400px){.container.block{width:" . (esc_html(haley_setting('haley_screen4'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(haley_setting('haley_screen4'))-20) . "px}}"; 
		}
		
		/* =================== END PAGE WIDTH =================== */
		
		/* =================== BEGIN HEADER TEXT COLOR =================== */

		if (haley_setting('haley_logo_text_color')) 
			$css .= "#logo a { color:".esc_html(haley_setting('haley_logo_text_color'))."; }";

		if (haley_setting('haley_hamburger_menu_icon_color')) 
			$css .= ".open-modal-sidebar i { color:".esc_html(haley_setting('haley_hamburger_menu_icon_color'))."; }";

		/* =================== END HEADER IMAGE =================== */

		/* =================== BEGIN LOGO STYLE =================== */

		if (haley_setting('haley_logo_font_size')) 
			$css .= "#logo a { font-size:".esc_html(haley_setting('haley_logo_font_size'))."; }";

		if (haley_setting('haley_logo_description_font_size')) 
			$css .= "#logo a span { font-size:".esc_html(haley_setting('haley_logo_description_font_size'))."; }";
		
		if ( haley_setting('haley_logo_description_top_margin') ) 
			$css .=  "#logo a span { margin-top:".esc_html(haley_setting('haley_logo_description_top_margin'))."; }"; 

		if (haley_setting('haley_logo_font_weight'))
			$css .= "#logo a { font-weight:" . esc_html(haley_setting('haley_logo_font_weight')) . ";}"; 
		
		if (haley_setting('haley_logo_text_transform'))
			$css .= "#logo a { text-transform:" . esc_html(haley_setting('haley_logo_text_transform')) . ";}"; 

		/* =================== END LOGO STYLE =================== */
		
		/* =================== BEGIN MAIN MENU STYLE =================== */
		
		if ( haley_setting('haley_menu_font_size') )  : 
			$css .= "nav#mobilemenu ul li a { font-size:".esc_html(haley_setting('haley_menu_font_size'))."; }"; 
			$css .= "nav#mobilemenu ul ul li a { font-size:" . ( str_replace("px", "", esc_html(haley_setting('haley_menu_font_size'))) - 2 ) . "px;}"; 
		endif;
		
		if (haley_setting('haley_menu_font_weight'))
			$css .= "nav#mobilemenu ul li a { font-weight:" . esc_html(haley_setting('haley_menu_font_weight')) . ";}"; 
		
		if (haley_setting('haley_menu_text_transform'))
			$css .= "nav#mobilemenu ul li a { text-transform:" . esc_html(haley_setting('haley_menu_text_transform')) . ";}"; 
		
		/* =================== END MAIN MENU =================== */
		
		/* =================== BEGIN CONTENT STYLE =================== */
		
		if ( haley_setting('haley_content_font_size') ) :
			
			$css .= '
				.post-article a,
				.post-article p,
				.post-article li,
				.post-article address,
				.post-article dd,
				.post-article blockquote,
				.post-article td,
				.post-article th,
				.post-article span,
				.sidebar-area a,
				.sidebar-area p,
				.sidebar-area li,
				.sidebar-area address,
				.sidebar-area dd,
				.sidebar-area blockquote,
				.sidebar-area td,
				.sidebar-area th,
				.sidebar-area span,
				.textwidget { font-size:' . esc_html(haley_setting('haley_content_font_size')) . '}';
			
		endif;
		
		/* =================== END CONTENT STYLE =================== */
		
		/* =================== START TITLE STYLE =================== */

		if ( haley_setting('haley_h1_font_size') ) :
		
			$css .=  "
				h1, 
				h1.title, 
				h1.title a, 
				h1.title span { font-size:" . esc_html(haley_setting('haley_h1_font_size')) . "; }"; 
		
		endif;
		
		if ( haley_setting('haley_h2_font_size') ) :
		
			$css .=  "
				h2, 
				h2.title, 
				h2.title a, 
				h2.title span { font-size:" . esc_html(haley_setting('haley_h2_font_size')) . "; }"; 
		
		endif;
		
		if ( haley_setting('haley_h3_font_size') ) :
		
			$css .=  "
				h3, 
				h3.title, 
				h3.title a, 
				h3.title span { font-size:" . esc_html(haley_setting('haley_h3_font_size')) . "; }"; 
		
		endif;
		
		if ( haley_setting('haley_h4_font_size') ) :
		
			$css .=  "
				h4, 
				h4.title, 
				h4.title a, 
				h4.title span { font-size:" . esc_html(haley_setting('haley_h4_font_size')) . "; }"; 
		
		endif;
		
		if ( haley_setting('haley_h5_font_size') ) :
		
			$css .=  "
				h5, 
				h5.title, 
				h5.title a, 
				h5.title span { font-size:" . esc_html(haley_setting('haley_h5_font_size')) . "; }"; 
		
		endif;
		
		if ( haley_setting('haley_h6_font_size') ) :
		
			$css .=  "
				h6, 
				h6.title, 
				h6.title a, 
				h6.title span { font-size:" . esc_html(haley_setting('haley_h6_font_size')) . "; }"; 
		
		endif;

		if ( haley_setting('haley_titles_font_weight') ) :
		
			$css .=  "
	
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				h1.title a,
				h2.title a,
				h3.title a,
				h4.title a,
				h5.title a,
				h6.title a,
				h1.title span,
				h2.title span,
				h3.title span,
				h4.title span,
				h5.title span,
				h6.title span { font-weight:" . esc_html(haley_setting('haley_titles_font_weight')) . "; }"; 
		
		endif;
		
		if ( haley_setting('haley_titles_text_transform') ) :
		
			$css .=  "
	
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				h1.title a,
				h2.title a,
				h3.title a,
				h4.title a,
				h5.title a,
				h6.title a { text-transform:" . esc_html(haley_setting('haley_titles_text_transform')) . "; }"; 
		
		endif;
		
		if ( haley_setting('haley_h2_font_size') && haley_is_woocommerce_active() ) :
		
			$css .=  "
				.cross-sells h2 span,
				.upsells-products h2 span,
				.related-products h2 span { font-size:" . esc_html(haley_setting('haley_h2_font_size')) . "; }"; 
		
		endif;

		/* =================== END TITLE STYLE =================== */

		/* =================== BEGIN POST META STYLE =================== */
		
		if ( haley_setting('haley_postmeta_font_size') ) :
			
			$css .= '
			.post-meta-author ,
			.post-meta-author a,
			.post-meta-date,
			.post-meta-category ,
			.post-meta-category a,
			.post-meta-icon { font-size:' . esc_html(haley_setting('haley_postmeta_font_size')) . ' !important}';
			
		endif;

		if ( haley_setting('haley_postmeta_text_transform') ) :
			
			$css .= '
			.post-meta-author ,
			.post-meta-date,
			.post-meta-category ,
			.post-meta-icon { text-transform:' . esc_html(haley_setting('haley_postmeta_text_transform')) . ' !important}';
			
		endif;

		/* =================== END POST META =================== */

		wp_add_inline_style( 'haley-style', $css );
		
	}

	add_action('wp_enqueue_scripts', 'haley_css_custom');

}

?>
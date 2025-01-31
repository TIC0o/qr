<?php

if (!function_exists('haley_customize_panel_function')) {

	function haley_customize_panel_function() {

		$theme_panel = array (

			array(

				'label' => esc_html__( 'Hide Tagline','haley'),
				'description' => esc_html__( 'Do you want to hide the tagline?','haley'),
				'id' => 'haley_hide_tagline',
				'type' => 'checkbox',
				'section' => 'title_tagline',
				'std' => true,

			),

			/* START SUPPORT SECTION */

			array(

				'title' => esc_html__( 'Upgrade to Haley Pro','haley'),
				'id' => 'haley-customize-info',
				'type' => 'haley-customize-info',
				'section' => 'haley-customize-info',
				'priority' => '08',

			),

			/* COLORS */

			array(

				'label' => esc_html__('Logo text color','haley'),
				'description' => esc_html__('Choose your custom color for the logo.','haley'),
				'id' => 'haley_logo_text_color',
				'type' => 'color',
				'section' => 'colors',
				'std' => '#616161',
			),

			array(

				'label' => esc_html__('Hamburger menu icon color','haley'),
				'description' => esc_html__('Choose your custom color for the hamburger menu icon.','haley'),
				'id' => 'haley_hamburger_menu_icon_color',
				'type' => 'color',
				'section' => 'colors',
				'std' => '#616161',
			),

			/* START GENERAL SECTION */

			array(

				'title' => esc_html__( 'Haley Main Settings','haley'),
				'description' => esc_html__( 'Haley Main Settings','haley'),
				'type' => 'panel',
				'id' => 'general_panel',
				'priority' => '10',

			),

			/* SKINS */

			array(

				'title' => esc_html__( 'Color Scheme','haley'),
				'description' => esc_html__( 'From this section you can manage the color scheme of Haley.','haley'),
				'type' => 'section',
				'panel' => 'general_panel',
				'priority' => '11',
				'id' => 'colorscheme_section',

			),

			array(

				'label' => esc_html__( 'Body Color Schemes','haley'),
				'description' => esc_html__('Choose your body color scheme.','haley'),
				'id' => 'haley_skin',
				'type' => 'select',
				'section' => 'colorscheme_section',
				'options' => array (
				   'cyan' => esc_html__( 'Cyan','haley'),
				   'orange' => esc_html__( 'Orange','haley'),
				   'blue' => esc_html__( 'Blue','haley'),
				   'red' => esc_html__( 'Red','haley'),
				   'pink' => esc_html__( 'Pink','haley'),
				   'purple' => esc_html__( 'Purple','haley'),
				   'yellow' => esc_html__( 'Yellow','haley'),
				   'green' => esc_html__( 'Green','haley'),
				   'black' => esc_html__( 'Black','haley'),
				   'clean-yellow' => esc_html__( 'Clean Yellow','haley'),
				   'clean-red' => esc_html__( 'Clean Red','haley'),
				   'clean-turquoise' => esc_html__( 'Clean Turquoise','haley'),
				   'clean-green' => esc_html__( 'Clean Green','haley'),
				   'clean-blue' => esc_html__( 'Clean Blue','haley'),
				   'clean-pink' => esc_html__( 'Clean Pink','haley'),
				),

				'std' => 'orange',

			),

			/* PAGE WIDTH */

			array(

				'title' => esc_html__( 'Page width','haley'),
				'description' => esc_html__( 'From this section you can manage the page width of Haley.','haley'),
				'type' => 'section',
				'id' => 'pagewidth_section',
				'panel' => 'general_panel',
				'priority' => '11',

			),

			array(

				'label' => esc_html__( 'Screen greater than 768px','haley'),
				'description' => esc_html__( 'Set a width, for a screen greater than 768 pixel (for example 750 and not 750px ) ','haley'),
				'id' => 'haley_screen1',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '750',

			),

			array(

				'label' => esc_html__( 'Screen greater than 992px','haley'),
				'description' => esc_html__( 'Set a width, for a screen greater than 992 pixel (for example 940 and not 940px ) ','haley'),
				'id' => 'haley_screen2',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '940',

			),

			array(

				'label' => esc_html__( 'Screen greater than 1200px','haley'),
				'description' => esc_html__( 'Set a width, in px, for a screen greater than 1200 pixel (for example 1170 and not 1170px ) ','haley'),
				'id' => 'haley_screen3',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '1170',

			),

			array(

				'label' => esc_html__( 'Screen greater than 1400px','haley'),
				'description' => esc_html__( 'Set a width, in px, for a screen greater than 1400px pixel (for example 1370 and not 1370px ) ','haley'),
				'id' => 'haley_screen4',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '1370',

			),

			/* Recent posts grid settings */

			array(

				'title' => esc_html__( 'Recent posts grid','haley'),
				'description' => esc_html__( 'From this section you can manage recent posts grid on the homepage.','haley'),
				'type' => 'section',
				'id' => 'recent_posts_grid_section',
				'panel' => 'general_panel',
				'priority' => '13',

			),

			array(

				'label' => esc_html__( 'Recent Posts Grid', 'haley' ),
				'description' => esc_html__( 'Do you want to enable the recent posts grid on the homepage?', 'haley' ),
				'id' => 'haley_enable_recent_posts',
				'type' => 'checkbox',
				'section' => 'recent_posts_grid_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Exclude Recent Posts', 'haley' ),
				'description' => esc_html__( 'Do you want to exclude the recent posts from the main homepage article loop (if the recent posts grid is enabled)?', 'haley' ),
				'id' => 'haley_exclude_recent_posts_on_loop',
				'type' => 'checkbox',
				'section' => 'recent_posts_grid_section',
				'std' => false,

			),

			/* General settings */

			array(

				'title' => esc_html__( 'General settings','haley'),
				'description' => esc_html__( 'From this section you can manage the general settings of Haley.','haley'),
				'type' => 'section',
				'id' => 'settings_section',
				'panel' => 'general_panel',
				'priority' => '13',

			),

			array(

				'label' => esc_html__( 'Scrollable sidebar menu on desktop','haley'),
				'description' => esc_html__( 'Do you want to display the menu within the scrollable sidebar on desktop devices as well?','haley'),
				'id' => 'haley_scrollable_menu_on_desktop',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Enable the breadcrumb','haley'),
				'description' => esc_html__( 'Do you want to enable the breadcrumb on whole website (except the homepage)?','haley'),
				'id' => 'haley_enable_breadcrumb',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => false,

			),

			array(

				'label' => esc_html__( 'Category title','haley'),
				'description' => esc_html__( 'Do you want to enable the category title, under the black container?','haley'),
				'id' => 'haley_enable_category_title',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Searched item','haley'),
				'description' => esc_html__( 'Do you want to enable the searched item, under the black container?','haley'),
				'id' => 'haley_enable_searched_item',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Back to top button','haley'),
				'description' => esc_html__( 'Do you want to enable a button to back on the top of the site?','haley'),
				'id' => 'haley_enable_backtotop_button',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,

			),

			/* Single posts settings */

			array(

				'title' => esc_html__( 'Single posts settings','haley'),
				'description' => esc_html__( 'From this section, you can manage (show or hide) various elements within individual posts, such as the category, publication date, author, etc.','haley'),
				'type' => 'section',
				'id' => 'single_posts_settings_section',
				'panel' => 'general_panel',
				'priority' => '13',

			),

			array(

				'label' => esc_html__( 'Show categories','haley'),
				'description' => esc_html__( 'Do you want to enable the post categories?','haley'),
				'id' => 'haley_enable_post_category',
				'type' => 'checkbox',
				'section' => 'single_posts_settings_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Show post icon','haley'),
				'description' => esc_html__( 'Do you want to enable the post icon?','haley'),
				'id' => 'haley_enable_post_icon',
				'type' => 'checkbox',
				'section' => 'single_posts_settings_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Show author','haley'),
				'description' => esc_html__( 'Do you want to enable the author name?','haley'),
				'id' => 'haley_enable_post_author',
				'type' => 'checkbox',
				'section' => 'single_posts_settings_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Show date','haley'),
				'description' => esc_html__( 'Do you want to enable the post date?','haley'),
				'id' => 'haley_enable_post_date',
				'type' => 'checkbox',
				'section' => 'single_posts_settings_section',
				'std' => true,

			),

			array(

				'label' => esc_html__( 'Post author info box','haley'),
				'description' => esc_html__( 'Do you want to display the post author info box below the content? (Important, the biographical info must be added from the user settings)','haley'),
				'id' => 'haley_enable_author_info_box',
				'type' => 'checkbox',
				'section' => 'single_posts_settings_section',
				'std' => false,

			),

			array(

				'label' => esc_html__( 'Post Format','haley'),
				'description' => esc_html__( 'Do you want to use a different layout for the Aside, Link and Quote posts?','haley'),
				'id' => 'haley_enable_post_format_layout',
				'type' => 'checkbox',
				'section' => 'single_posts_settings_section',
				'std' => true,

			),

			/* WooCommerce Settings section */

			array(

				'title' => esc_html__( 'WooCommerce settings','haley'),
				'description' => esc_html__( 'From this section you can manage the settings of WooCommerce.','haley'),
				'type' => 'section',
				'id' => 'woocommerce_section',
				'panel' => 'general_panel',
				'priority' => '25',

			),

			array(

				'label' => esc_html__('WooCommerce header cart','haley'),
				'description' => esc_html__('Do you want to show the header cart?','haley'),
				'id' => 'haley_enable_woocommerce_header_cart',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => true,

			),

			array(

				'label' => esc_html__('WooCommerce header cart icon','haley'),
				'description' => esc_html__('Select the icon for WooCommerce header cart (Please clear the cookies to display the new icon)','haley'),
				'id' => 'haley_woocommerce_header_icon',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'fa-shopping-basket' => esc_html__( 'Icon 1','haley'),
				   'fa-shopping-cart' => esc_html__( 'Icon 2','haley'),
				   'fa-cart-plus' => esc_html__( 'Icon 3','haley'),
				),
				'std' => 'fa-shopping-basket',

			),

			array(

				'label' => esc_html__( 'Cross sell products','haley'),
				'description' => esc_html__( 'Do you want to display the cross sell products on cart page?','haley'),
				'id' => 'haley_enable_woocommerce_cross_sell_cart',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,

			),

			array(

				'label' => esc_html__( 'Related products','haley'),
				'description' => esc_html__( 'Do you want to display the related products on product page?','haley'),
				'id' => 'haley_enable_woocommerce_related_products',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,

			),

			array(

				'label' => esc_html__( 'Up sell products','haley'),
				'description' => esc_html__( 'Do you want to display the up sell products on product page?','haley'),
				'id' => 'haley_enable_woocommerce_upsell_products',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,

			),

			array(

				'label' => esc_html__( 'WooCommerce linkable product thumbnails','haley'),
				'description' => esc_html__( 'Do you want to make linkable the product thumbnails on WooCommerce category pages?','haley'),
				'id' => 'haley_enable_woocommerce_linkable_product_thumbnails',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,

			),

			array(

				'label' => esc_html__('WooCommerce Category Layout','haley'),
				'description' => esc_html__('Select a layout for the woocommerce categories.','haley'),
				'id' => 'haley_woocommerce_category_layout',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','haley'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','haley'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','haley'),
				),

				'std' => 'right-sidebar',

			),

			/* FEATURED LINKS */

			array(

				'title' => esc_html__( 'Haley Featured Links','haley'),
				'description' => esc_html__( 'Haley Featured Links','haley'),
				'type' => 'panel',
				'id' => 'featured_links_panel',
				'priority' => '10',

			),

			array(

				'title' => esc_html__( 'Featured Link Settings','haley'),
				'description' => esc_html__('Featured Link #1','haley'),
				'type' => 'section',
				'panel' => 'featured_links_panel',
				'priority' => '09',
				'id' => 'featured_links_settings',

			),

			array(

				'label' => esc_html__( 'Enable the featured links section','haley'),
				'description' => esc_html__( 'Do you want to display the featured links section, below the homepage slideshow?','haley'),
				'id' => 'haley_enable_featuredlinks_section',
				'type' => 'checkbox',
				'section' => 'featured_links_settings',
				'std' => false,

			),

			/* #1 FEATURED LINK */

			array(

				'title' => esc_html__( 'Featured Link #1','haley'),
				'description' => esc_html__('Featured Link #1','haley'),
				'type' => 'section',
				'panel' => 'featured_links_panel',
				'priority' => '10',
				'id' => 'featured_link_1',

			),

			array(

				'label' => esc_html__( 'Image','haley'),
				'description' => esc_html__( 'Upload the image','haley'),
				'id' => 'haley_featured_link_1_image',
				'type' => 'upload',
				'section' => 'featured_link_1',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Title','haley'),
				'description' => esc_html__( 'Insert the title of this slide','haley'),
				'id' => 'haley_featured_link_1_title',
				'type' => 'text',
				'section' => 'featured_link_1',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Url','haley'),
				'description' => esc_html__( 'Insert the url of this slide','haley'),
				'id' => 'haley_featured_link_1_url',
				'type' => 'url',
				'section' => 'featured_link_1',
				'std' => '',

			),

			/* #2 FEATURED LINK */

			array(

				'title' => esc_html__( 'Featured Link #2','haley'),
				'description' => esc_html__('Featured Link #2','haley'),
				'type' => 'section',
				'panel' => 'featured_links_panel',
				'priority' => '10',
				'id' => 'featured_link_2',

			),

			array(

				'label' => esc_html__( 'Image','haley'),
				'description' => esc_html__( 'Upload the image','haley'),
				'id' => 'haley_featured_link_2_image',
				'type' => 'upload',
				'section' => 'featured_link_2',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Title','haley'),
				'description' => esc_html__( 'Insert the title of this slide','haley'),
				'id' => 'haley_featured_link_2_title',
				'type' => 'text',
				'section' => 'featured_link_2',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Url','haley'),
				'description' => esc_html__( 'Insert the url of this slide','haley'),
				'id' => 'haley_featured_link_2_url',
				'type' => 'url',
				'section' => 'featured_link_2',
				'std' => '',

			),

			/* #3 FEATURED LINK */

			array(

				'title' => esc_html__( 'Featured Link #3','haley'),
				'description' => esc_html__('Featured Link #3','haley'),
				'type' => 'section',
				'panel' => 'featured_links_panel',
				'priority' => '10',
				'id' => 'featured_link_3',

			),

			array(

				'label' => esc_html__( 'Image','haley'),
				'description' => esc_html__( 'Upload the image','haley'),
				'id' => 'haley_featured_link_3_image',
				'type' => 'upload',
				'section' => 'featured_link_3',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Title','haley'),
				'description' => esc_html__( 'Insert the title of this slide','haley'),
				'id' => 'haley_featured_link_3_title',
				'type' => 'text',
				'section' => 'featured_link_3',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Url','haley'),
				'description' => esc_html__( 'Insert the url of this slide','haley'),
				'id' => 'haley_featured_link_3_url',
				'type' => 'url',
				'section' => 'featured_link_3',
				'std' => '',

			),

			/* LAYOUTS SECTION */

			array(

				'title' => esc_html__( 'Layouts','haley'),
				'description' => esc_html__( 'From this section you can manage the layouts of Haley.','haley'),
				'type' => 'section',
				'id' => 'layouts_section',
				'panel' => 'general_panel',
				'priority' => '16',

			),

			array(

				'label' => esc_html__('Home Blog Layout','haley'),
				'description' => esc_html__('If you&#39;ve set the latest articles, for the homepage, choose a layout.','haley'),
				'id' => 'haley_home_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','haley'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','haley'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','haley'),
				   'col-md-4' => esc_html__( 'Masonry','haley'),
				),

				'std' => 'right-sidebar',

			),

			array(

				'label' => esc_html__('Category Layout','haley'),
				'description' => esc_html__('Select a layout for category pages.','haley'),
				'id' => 'haley_category_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','haley'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','haley'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','haley'),
				   'col-md-4' => esc_html__( 'Masonry','haley'),
				),

				'std' => 'right-sidebar',

			),

			array(

				'label' => esc_html__('Search Layout','haley'),
				'description' => esc_html__('Select a layout for the search section.','haley'),
				'id' => 'haley_search_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','haley'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','haley'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','haley'),
				   'col-md-4' => esc_html__( 'Masonry','haley'),
				),

				'std' => 'right-sidebar',

			),

			array(

				'label' => esc_html__('Read More Layout','haley'),
				'description' => esc_html__('Select a layout for the read more button.','haley'),
				'id' => 'haley_readmore_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
					'default' => esc_html__( 'Default Button','haley'),
					'nobutton' => esc_html__( 'Replace with => [...]','haley'),
				),

				'std' => 'default',

			),

			/* FOOTER AREA SECTION */

			array(

				'title' => esc_html__( 'Social Links and Footer','haley'),
				'description' => esc_html__( 'From this section you can manage the social icons and the copyright text.','haley'),
				'type' => 'section',
				'id' => 'footer_section',
				'panel' => 'general_panel',
				'priority' => '17',

			),

			array(

				'label' => esc_html__( 'Copyright Text','haley'),
				'description' => esc_html__( 'Insert your copyright text.','haley'),
				'id' => 'haley_copyright_text',
				'type' => 'textarea',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Facebook Url','haley'),
				'description' => esc_html__( 'Insert Facebook Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_facebook_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'X Url','haley'),
				'description' => esc_html__( 'Insert X (Twitter) Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_x_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Flickr Url','haley'),
				'description' => esc_html__( 'Insert Flickr Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_flickr_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Linkedin Url','haley'),
				'description' => esc_html__( 'Insert Linkedin Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_linkedin_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Slack Url','haley'),
				'description' => esc_html__( 'Insert Slack Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_slack_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Pinterest Url','haley'),
				'description' => esc_html__( 'Insert Pinterest Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_pinterest_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Tumblr Url','haley'),
				'description' => esc_html__( 'Insert Tumblr Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_tumblr_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Soundcloud Url','haley'),
				'description' => esc_html__( 'Insert Soundcloud Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_soundcloud_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Spotify Url','haley'),
				'description' => esc_html__( 'Insert Spotify Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_spotify_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Youtube Url','haley'),
				'description' => esc_html__( 'Insert Youtube Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_youtube_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Vimeo Url','haley'),
				'description' => esc_html__( 'Insert Vimeo Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_vimeo_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'VK Url','haley'),
				'description' => esc_html__( 'Insert VK Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_vk_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Instagram Url','haley'),
				'description' => esc_html__( 'Insert Instagram Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_instagram_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Deviantart Url','haley'),
				'description' => esc_html__( 'Insert Deviantart Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_deviantart_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Github Url','haley'),
				'description' => esc_html__( 'Insert Github Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_github_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Xing Url','haley'),
				'description' => esc_html__( 'Insert Xing Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_xing_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Dribbble Url','haley'),
				'description' => esc_html__( 'Insert Dribbble Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_dribbble_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Dropbox Url','haley'),
				'description' => esc_html__( 'Insert Dropbox Url (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_dropbox_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Whatsapp Number','haley'),
				'description' => esc_html__( 'Insert Whatsapp number (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_whatsapp_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Telegram Account','haley'),
				'description' => esc_html__( 'Insert Telegram Account (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_telegram_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Trello Account','haley'),
				'description' => esc_html__( 'Insert Trello Account (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_trello_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Twitch Account','haley'),
				'description' => esc_html__( 'Insert Twitch Account (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_twitch_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Tripadvisor Account','haley'),
				'description' => esc_html__( 'Insert Tripadvisor Account (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_tripadvisor_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Vine Account','haley'),
				'description' => esc_html__( 'Insert Vine Account (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_vine_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Skype Url','haley'),
				'description' => esc_html__( 'Insert Skype ID (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_skype_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Skype Url','haley'),
				'description' => esc_html__( 'Insert Skype ID (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_skype_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Email Address','haley'),
				'description' => esc_html__( 'Insert Email Address (leave empty if you want to hide the button)','haley'),
				'id' => 'haley_footer_email_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(

				'label' => esc_html__( 'Feed Rss Button','haley'),
				'description' => esc_html__( 'Do you want to display the Feed Rss button?','haley'),
				'id' => 'haley_footer_rss_button',
				'type' => 'select',
				'section' => 'footer_section',
				'options' => array (
				   'off' => esc_html__( 'No','haley'),
				   'on' => esc_html__( 'Yes','haley'),
				),

				'std' => 'off',

			),

			/* TYPOGRAPHY SECTION */

			array(

				'title' => esc_html__( 'Haley Typography','haley'),
				'description' => esc_html__( 'Haley Typography','haley'),
				'type' => 'panel',
				'id' => 'typography_panel',
				'priority' => '11',

			),

			/* LOGO */

			array(

				'title' => esc_html__( 'Logo','haley'),
				'description' => esc_html__( 'From this section you can manage the typography of the logo.','haley'),
				'type' => 'section',
				'id' => 'logo_section',
				'panel' => 'typography_panel',
				'priority' => '10',

			),

			array(

				'label' => esc_html__( 'Font size','haley'),
				'description' => esc_html__( 'Insert a size, for logo font (For example, 60px) ','haley'),
				'id' => 'haley_logo_font_size',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '70px',

			),

			array(

				'label' => esc_html__( 'Description font size','haley'),
				'description' => esc_html__( 'Insert a size, for logo description (For example, 14px) ','haley'),
				'id' => 'haley_logo_description_font_size',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '14px',

			),

			array(

				'label' => esc_html__( 'Description top margin','haley'),
				'description' => esc_html__( 'Add a space between the logo and the description (For example, 15px) ','haley'),
				'id' => 'haley_logo_description_top_margin',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '15px',

			),

			array(

				'label' => esc_html__('Weight','haley'),
				'description' => esc_html__('Choose a font weight for the logo.','haley'),
				'id' => 'haley_logo_font_weight',
				'type' => 'select',
				'section' => 'logo_section',
				'options' => array(
					'100' => esc_html__( '100','haley'),
					'200' => esc_html__( '200','haley'),
					'300' => esc_html__( '300','haley'),
					'400' => esc_html__( '400','haley'),
					'500' => esc_html__( '500','haley'),
					'600' => esc_html__( '600','haley'),
					'700' => esc_html__( '700','haley'),
					'800' => esc_html__( '800','haley'),
					'900' => esc_html__( '900','haley'),
				),

				'std' => '500',

			),

			array(

				'label' => esc_html__('Text transform','haley'),
				'description' => esc_html__('Do you want to display an uppercase logo?.','haley'),
				'id' => 'haley_logo_text_transform',
				'type' => 'select',
				'section' => 'logo_section',
				'options' => array(
					'none' => esc_html__( 'None','haley'),
					'uppercase' => esc_html__( 'Uppercase','haley'),
				),

				'std' => 'none',

			),

			/* MENU */

			array(

				'title' => esc_html__( 'Menu','haley'),
				'description' => esc_html__( 'From this section you can manage the typography of the menu.','haley'),
				'type' => 'section',
				'id' => 'menu_section',
				'panel' => 'typography_panel',
				'priority' => '11',

			),

			array(

				'label' => esc_html__( 'Font size','haley'),
				'description' => esc_html__( 'Insert a size, for menu font (For example, 14px) ','haley'),
				'id' => 'haley_menu_font_size',
				'type' => 'pixel_size',
				'section' => 'menu_section',
				'std' => '16px',

			),

			array(

				'label' => esc_html__('Menu weight','haley'),
				'description' => esc_html__('Choose a font weight for the menu.','haley'),
				'id' => 'haley_menu_font_weight',
				'type' => 'select',
				'section' => 'menu_section',
				'options' => array(
					'100' => esc_html__( '100','haley'),
					'200' => esc_html__( '200','haley'),
					'300' => esc_html__( '300','haley'),
					'400' => esc_html__( '400','haley'),
					'500' => esc_html__( '500','haley'),
					'600' => esc_html__( '600','haley'),
					'700' => esc_html__( '700','haley'),
					'800' => esc_html__( '800','haley'),
					'900' => esc_html__( '900','haley'),
				),

				'std' => '400',

			),

			array(

				'label' => esc_html__('Text transform','haley'),
				'description' => esc_html__('Do you want to display an uppercase menu?.','haley'),
				'id' => 'haley_menu_text_transform',
				'type' => 'select',
				'section' => 'menu_section',
				'options' => array(
					'none' => esc_html__( 'None','haley'),
					'uppercase' => esc_html__( 'Uppercase','haley'),
				),

				'std' => 'none',

			),

			/* CONTENT */

			array(

				'title' => esc_html__( 'Content','haley'),
				'description' => esc_html__( 'From this section you can manage the typography of the content.','haley'),
				'type' => 'section',
				'id' => 'content_section',
				'panel' => 'typography_panel',
				'priority' => '12',

			),

			array(

				'label' => esc_html__( 'Font size','haley'),
				'description' => esc_html__( 'Insert a size, for content font (For example, 14px) ','haley'),
				'id' => 'haley_content_font_size',
				'type' => 'pixel_size',
				'section' => 'content_section',
				'std' => '14px',

			),


			/* HEADLINES */

			array(

				'title' => esc_html__( 'Headlines','haley'),
				'description' => esc_html__( 'From this section you can manage the typography of the headlines.','haley'),
				'type' => 'section',
				'id' => 'headlines_section',
				'panel' => 'typography_panel',
				'priority' => '13',

			),

			array(

				'label' => esc_html__( 'H1 headline','haley'),
				'description' => esc_html__( 'Insert a size, for for H1 elements (For example, 24px) ','haley'),
				'id' => 'haley_h1_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '24px',

			),

			array(

				'label' => esc_html__( 'H2 headline','haley'),
				'description' => esc_html__( 'Insert a size, for for H2 elements (For example, 22px) ','haley'),
				'id' => 'haley_h2_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '22px',

			),

			array(

				'label' => esc_html__( 'H3 headline','haley'),
				'description' => esc_html__( 'Insert a size, for for H3 elements (For example, 20px) ','haley'),
				'id' => 'haley_h3_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '20px',

			),

			array(

				'label' => esc_html__( 'H4 headline','haley'),
				'description' => esc_html__( 'Insert a size, for for H4 elements (For example, 18px) ','haley'),
				'id' => 'haley_h4_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '18px',

			),

			array(

				'label' => esc_html__( 'H5 headline','haley'),
				'description' => esc_html__( 'Insert a size, for for H5 elements (For example, 16px) ','haley'),
				'id' => 'haley_h5_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '16px',

			),

			array(

				'label' => esc_html__( 'H6 headline','haley'),
				'description' => esc_html__( 'Insert a size, for for H6 elements (For example, 14px) ','haley'),
				'id' => 'haley_h6_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '14px',

			),

			array(

				'label' => esc_html__('Titles weight','haley'),
				'description' => esc_html__('Choose a font weight for the titles.','haley'),
				'id' => 'haley_titles_font_weight',
				'type' => 'select',
				'section' => 'headlines_section',
				'options' => array(
					'100' => esc_html__( '100','haley'),
					'200' => esc_html__( '200','haley'),
					'300' => esc_html__( '300','haley'),
					'400' => esc_html__( '400','haley'),
					'500' => esc_html__( '500','haley'),
					'600' => esc_html__( '600','haley'),
					'700' => esc_html__( '700','haley'),
					'800' => esc_html__( '800','haley'),
					'900' => esc_html__( '900','haley'),
				),

				'std' => '600',

			),

			array(

				'label' => esc_html__('Text transform','haley'),
				'description' => esc_html__('Do you want to display an uppercase title?.','haley'),
				'id' => 'haley_titles_text_transform',
				'type' => 'select',
				'section' => 'headlines_section',
				'options' => array(
					'none' => esc_html__( 'None','haley'),
					'uppercase' => esc_html__( 'Uppercase','haley'),
				),

				'std' => 'none',

			),

			/* POST META */

			array(

				'title' => esc_html__( 'Post meta','haley'),
				'description' => esc_html__( 'From this section, you can manage the typography of the post meta.','haley'),
				'type' => 'section',
				'id' => 'postmeta_section',
				'panel' => 'typography_panel',
				'priority' => '13',

			),

			array(

				'label' => esc_html__( 'Font size','haley'),
				'description' => esc_html__( 'Insert a size for the post meta (e.g., 11px)','haley'),
				'id' => 'haley_postmeta_font_size',
				'type' => 'pixel_size',
				'section' => 'postmeta_section',
				'std' => '11px',

			),

			array(

				'label' => esc_html__('Text transform','haley'),
				'description' => esc_html__('Do you want to display the post meta in uppercase?','haley'),
				'id' => 'haley_postmeta_text_transform',
				'type' => 'select',
				'section' => 'postmeta_section',
				'options' => array(
					'none' => esc_html__( 'None','haley'),
					'uppercase' => esc_html__( 'Uppercase','haley'),
				),

				'std' => 'uppercase',

			),

		);

		new haley_customize($theme_panel);

	}

	add_action( 'haley_customize_panel', 'haley_customize_panel_function' );

}

do_action('haley_customize_panel');

?>

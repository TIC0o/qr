<?php

/**
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

define( 'HALEY_MIN_PHP_VERSION', '5.3' );

/*-----------------------------------------------------------------------------------*/
/* Switches back to the previous theme if the minimum PHP version is not met */
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'haley_check_php_version' ) ) {

	function haley_check_php_version() {

		if ( version_compare( PHP_VERSION, HALEY_MIN_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', 'haley_min_php_not_met_notice' );
			switch_theme( get_option( 'theme_switched' ));
			return false;

		};
	}

	add_action( 'after_switch_theme', 'haley_check_php_version' );

}

/*-----------------------------------------------------------------------------------*/
/* An error notice that can be displayed if the Minimum PHP version is not met */
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'haley_min_php_not_met_notice' ) ) {

	function haley_min_php_not_met_notice() {
		?>
		<div class="notice notice-error is_dismissable">
			<p>
				<?php esc_html_e('You need to update your PHP version to run this theme.', 'haley' ); ?><br />
				<?php
				printf(
					esc_html__( 'Actual version is: %1$s, required version is: %2$s.', 'haley' ),
					PHP_VERSION,
					HALEY_MIN_PHP_VERSION
				);
				?>
			</p>
		</div>
		<?php

	}

}

/*-----------------------------------------------------------------------------------*/
/* WooCommerce is active */
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'haley_is_woocommerce_active' ) ) {

	function haley_is_woocommerce_active( $type = '' ) {

        global $woocommerce;

        if ( isset( $woocommerce ) ) {

			if ( !$type || call_user_func($type) ) {

				return true;

			}

		}

	}

}

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'haley_comments' ) ) {

	function haley_comments($comment, $args, $depth) {

	?>

		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

		<div id="comment-<?php comment_ID(); ?>" class="comment-container">

			<div class="comment-avatar">
				<?php echo get_avatar($comment->comment_author_email, 80 ); ?>
			</div>

			<div class="comment-text">

            	<header class="comment-author">

                    <span class="author"><cite><?php printf( esc_html__('%s has written:','haley'), get_comment_author_link());?> </cite></span>

                    <time datetime="<?php echo esc_attr(get_comment_date())?>" class="comment-date">

                        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>">
                            <?php printf(esc_html__('%1$s at %2$s','haley'), get_comment_date(),  get_comment_time()) ?>
                        </a>

                        <?php

							comment_reply_link(
								array_merge(
									$args,
									array(
										'depth' => $depth,
										'max_depth' => $args['max_depth']
									)
								)
							);

							edit_comment_link(esc_html__('(Edit)','haley'));

						?>

                    </time>

				</header>

				<?php if ($comment->comment_approved == '0') : ?>

                    <p><em><?php esc_html_e('Your comment is awaiting approval.','haley') ?></em></p>

				<?php endif; ?>

				<?php comment_text() ?>

			</div>

			<div class="clear"></div>

		</div>

	<?php

	}

}

/*-----------------------------------------------------------------------------------*/
/* Get archive title */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_get_the_archive_title')) {

	function haley_get_archive_title() {

		if ( is_category() ) {
			$title = sprintf( esc_html__( 'Category: %s', 'haley' ), single_cat_title( '', false ) );
		} elseif ( is_tag() ) {
			$title = sprintf( esc_html__( 'Tag: %s', 'haley' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			$title = sprintf( esc_html__( 'Author: %s', 'haley' ), '<span class="vcard">' . get_the_author() . '</span>' );
		} elseif ( is_year() ) {
			$title = sprintf( esc_html__( 'Year: %s', 'haley' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'haley' ) ) );
		} elseif ( is_month() ) {
			$title = sprintf( esc_html__( 'Month: %s', 'haley' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'haley' ) ) );
		} elseif ( is_day() ) {
			$title = sprintf( esc_html__( 'Day: %s', 'haley' ), get_the_date( esc_html_x( 'F j, Y', 'daily archives date format', 'haley' ) ) );
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = esc_html_x( 'Asides', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = esc_html_x( 'Galleries', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = esc_html_x( 'Images', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = esc_html_x( 'Videos', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = esc_html_x( 'Quotes', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = esc_html_x( 'Links', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = esc_html_x( 'Statuses', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = esc_html_x( 'Audio', 'post format archive title', 'haley' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = esc_html_x( 'Chats', 'post format archive title', 'haley' );
			}
		} elseif ( is_post_type_archive() ) {
			$title = sprintf( esc_html__( 'Archives: %s', 'haley' ), post_type_archive_title( '', false ) );
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			$title = sprintf( esc_html__( '%1$s: %2$s', 'haley' ), $tax->labels->singular_name, single_term_title( '', false ) );
		}

		if ( isset($title) )  :
			return $title;
		else:
			return false;
		endif;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Check if is single page */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_is_single')) {

	function haley_is_single() {

		if ( is_single() || is_page() ) :

			return true;

		endif;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Get theme setting */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_setting')) {

	function haley_setting($id, $default = FALSE ) {

		return get_theme_mod($id, $default);

	}

}

/*-----------------------------------------------------------------------------------*/
/* Get post meta */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_postmeta')) {

	function haley_postmeta( $id, $default = '' ) {

		global $post, $wp_query;

		if (haley_is_woocommerce_active('is_shop')) :

			$content_ID = get_option('woocommerce_shop_page_id');

		else :

			$content_ID = (isset($post->ID)) ? $post->ID : false;

		endif;

		$val = get_post_meta( $content_ID , $id, TRUE);

		if ( !empty($val) ) :

			return $val;

		else:

			return $default;

		endif;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Add Skype on allowed protocols */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_kses_allowed_protocols')) {

	function haley_kses_allowed_protocols($protocols) {

		$protocols[] = 'skype';
		return $protocols;

	}

	add_filter( 'kses_allowed_protocols', 'haley_kses_allowed_protocols');

}

/*-----------------------------------------------------------------------------------*/
/* Responsive embed */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_embed_html')) {

	function haley_embed_html( $html ) {
		return '<div class="embed-container">' . $html . '</div>';
	}

	add_filter( 'embed_oembed_html', 'haley_embed_html', 10, 3 );
	add_filter( 'video_embed_html', 'haley_embed_html' );

}

/*-----------------------------------------------------------------------------------*/
/* Content template */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_template')) {

	function haley_template($id) {

		$template = array (

			'full' => 'col-md-12' ,
			'left-sidebar' => 'col-md-8' ,
			'right-sidebar' => 'col-md-8'

		);

		$span = $template['right-sidebar'];
		$sidebar =  'right-sidebar';

		if (
			haley_is_woocommerce_active('is_woocommerce') &&
			haley_postmeta('haley_template') &&
			is_search()
		) {

			$span = $template[esc_attr(haley_postmeta('haley_template'))];
			$sidebar =  esc_attr(haley_postmeta('haley_template'));

		} elseif (
			!is_attachment() &&
			haley_postmeta('haley_template') &&
			(is_page() || is_single() || haley_is_woocommerce_active('is_shop'))
		) {

			$span = $template[esc_attr(haley_postmeta('haley_template'))];
			$sidebar =  esc_attr(haley_postmeta('haley_template'));

		} elseif (
			!haley_is_woocommerce_active('is_woocommerce') &&
			( is_category() || is_tag() || is_month() ) &&
			haley_setting('haley_category_layout')
		) {

			$span = $template[esc_attr(haley_setting('haley_category_layout'))];
			$sidebar =  esc_attr(haley_setting('haley_category_layout'));

		} elseif (
			is_home() &&
			haley_setting('haley_home_layout')
		) {

			$span = $template[esc_attr(haley_setting('haley_home_layout'))];
			$sidebar =  esc_attr(haley_setting('haley_home_layout'));

		} else if (
			!haley_is_woocommerce_active('is_woocommerce') &&
			is_search() &&
			haley_setting('haley_search_layout')
		) {

			$span = $template[esc_attr(haley_setting('haley_search_layout'))];
			$sidebar =  esc_attr(haley_setting('haley_search_layout'));

		} else if (
			haley_is_woocommerce_active('is_woocommerce') &&
			( haley_is_woocommerce_active('is_product_category') || haley_is_woocommerce_active('is_product_tag') ) &&
			haley_setting('haley_woocommerce_category_layout')
		) {

			$span = $template[esc_attr(haley_setting('haley_woocommerce_category_layout'))];
			$sidebar =  esc_attr(haley_setting('haley_woocommerce_category_layout'));

		} elseif ( is_attachment() ) {

			$span = $template['full'];
			$sidebar =  'full';

		}

		return ${$id};

	}

}

/*-----------------------------------------------------------------------------------*/
/* Is archive */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_is_archive')) {

	function haley_is_archive() {

		if (
			is_category() ||
			is_tag() ||
			is_author() ||
			is_year() ||
			is_month()

		) {

			return true;

		} else {

			return false;

		}

	}

}

/*-----------------------------------------------------------------------------------*/
/* BODY CLASSES */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_body_classes_function')) {

	function haley_body_classes_function($classes) {

		global $wp_customize;

		if ( isset( $wp_customize ) ) :

			$classes[] = 'is_customizer_panel';

		endif;

		if (
			( is_home() ) ||
			( haley_is_archive() ) ||
			( is_search() )
		) :

			$classes[] = 'is_blog_section';

		endif;

		if (
			( 
				get_theme_mod('background_color','ffffff') == 'ffffff' &&
				!get_background_image()
			)
		) :

			$classes[] = 'is_minimal_layout';

		endif;

		if (
			( get_theme_mod('haley_scrollable_menu_on_desktop') == false )
		) :

			$classes[] = 'hide_scrollable_menu_on_desktop';

		endif;

		return $classes;

	}

	add_filter('body_class', 'haley_body_classes_function');

}

/*-----------------------------------------------------------------------------------*/
/* Post class */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_post_class')) {

	function haley_post_class($classes) {

		$masonry  = 'post-container masonry-item col-md-4';
		$standard = 'post-container col-md-12';

		if ( !haley_is_single() ) {

			if ( is_home() ) {

				if ( 
					haley_setting('haley_home_layout') == 'col-md-4'
				) {

					$classes[] = $masonry;

				} else {

					$classes[] = $standard;

				}

			} else if ( is_archive() && !haley_is_woocommerce_active('is_shop') ) {

				if ( haley_setting('haley_category_layout') == 'col-md-4' ) {

					$classes[] = $masonry;

				} else {

					$classes[] = $standard;

				}

			} else if ( is_search() ) {

				if ( haley_setting('haley_search_layout') == 'col-md-4' ) {

					$classes[] = $masonry;

				} else {

					$classes[] = $standard;

				}

			}

		} else if ( haley_is_single() && haley_is_woocommerce_active('is_cart') ) {

			$classes[] = 'post-container col-md-12 woocommerce_cart_page';

		} else if ( haley_is_single() && !haley_is_woocommerce_active('is_product') ) {

			$classes[] = 'post-container col-md-12';

		} else if ( is_page() ) {

			$classes[] = 'full';

		}

		if (
			( is_home() ) ||
			( haley_is_archive() ) ||
			( is_search() )
		) :

			$classes[] = 'post-container-wrap';

		endif;

		return $classes;

	}

	add_filter('post_class', 'haley_post_class');

}

/*-----------------------------------------------------------------------------------*/
/* Get paged */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_paged')) {

	function haley_paged() {

		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}

		return $paged;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Swipebox post gallery */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_swipebox')) {

	function haley_swipebox($html, $id, $size, $permalink, $icon, $text) {

		if ( !$permalink )
			return str_replace( '<a', '<a class="swipebox"', $html );
		else
			return $html;
	}

	add_filter( 'wp_get_attachment_link', 'haley_swipebox', 10, 6);

}

/*-----------------------------------------------------------------------------------*/
/* Get link url  */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_get_link_url')) {

	function haley_get_link_url() {

		$content = get_the_content();
		$has_url = get_url_in_content( $content );
		return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );

	}

}

/*-----------------------------------------------------------------------------------*/
/* Excerpt more */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_hide_excerpt_more')) {

	function haley_hide_excerpt_more() {
		return '';
	}

	add_filter('the_content_more_link', 'haley_hide_excerpt_more');
	add_filter('excerpt_more', 'haley_hide_excerpt_more');

}

/*-----------------------------------------------------------------------------------*/
/* Get post icon */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_posticon')) {

	function haley_posticon() {
		
		$html = '';

		$icons = array (
			'video' => 'fa fa-play' , 
			'gallery' => 'fa fa-camera' , 
			'audio' => 'fa fa-volume-up' , 
			'chat' => 'fa fa-users', 
			'status' => 'fa fa-keyboard-o', 
			'image' => 'fa fa-picture-o' ,
			'quote' => 'fa fa-quote-left', 
			'link' => 'fa fa-external-link', 
			'aside' => 'fa fa-file-text-o', 
		);

		if ( get_post_format() ) { 
		
			$html .= '<i class="'.esc_attr($icons[get_post_format()]).'"></i> '; 
			$html .= ucfirst( strtolower( esc_html(get_post_format()) )); 
		
		} else {
		
			$html .= '<i class="fa fa-pencil-square"></i> '; 
			$html .= esc_html__( 'Article','haley'); 
		
		}

		return $html;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_scripts_styles')) {

	function haley_scripts_styles() {

		$googleFontsArgs = array(
			'family' =>	str_replace('|', '%7C','Work+Sans:100,200,300,400,500,600,700,800,900|Roboto+Slab:100,200,300,400,500,600,700,800,900'),
			'subset' =>	'latin,latin-ext'
		);

		wp_enqueue_style('dashicons');
		wp_enqueue_style('google-fonts', add_query_arg ( $googleFontsArgs, "https://fonts.googleapis.com/css" ), array(), '1.0.0' );
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.7' );
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.7.0' );
		wp_enqueue_style('swipebox', get_template_directory_uri() . '/assets/css/swipebox.css', array(), '1.3.0' );
		wp_enqueue_style('haley-style', get_stylesheet_uri(), array() );
		wp_enqueue_style('haley-woocommerce', get_template_directory_uri() . '/assets/css/haley-woocommerce.css', array(), '1.0.0' );

		wp_enqueue_style(
			'haley-' . esc_attr(get_theme_mod('haley_skin', 'orange')),
			get_template_directory_uri() . '/assets/skins/' . esc_attr(get_theme_mod('haley_skin', 'orange')) . '.css',
			array( 'haley-style' ),
			'1.0.0'
		);

		wp_enqueue_script( 'haley-navigation', get_template_directory_uri() . '/assets/js/navigation.js' , array('jquery'), '1.0', TRUE );

		wp_localize_script( 'haley-navigation', 'accessibleNavigationScreenReaderText', array(
			'expandMain'   => __( 'Open the main menu', 'haley' ),
			'collapseMain' => __( 'Close the main menu', 'haley' ),
			'expandChild'   => __( 'expand submenu', 'haley' ),
			'collapseChild' => __( 'collapse submenu', 'haley' ),
		));

		wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js' , array('jquery'), '1.3', TRUE );
		wp_enqueue_script('jquery-nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.js' , array('jquery'), '3.7.6', TRUE );
		wp_enqueue_script('jquery-swipebox', get_template_directory_uri() . '/assets/js/jquery.swipebox.js' , array('jquery'), '1.4.4', TRUE );
		wp_enqueue_script('jquery-touchSwipe', get_template_directory_uri() . '/assets/js/jquery.touchSwipe.js' , array('jquery'), '1.6.18', TRUE );
		wp_enqueue_script('fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js' , array('jquery'), '1.1', TRUE );
		wp_enqueue_script('haley-template',get_template_directory_uri() . '/assets/js/haley-template.js',array('jquery', 'imagesloaded', 'masonry'), '1.0.0', TRUE );

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		wp_enqueue_script('html5shiv', get_template_directory_uri().'/assets/scripts/html5shiv.js', FALSE, '3.7.3');
		wp_script_add_data('html5shiv', 'conditional', 'IE 8' );
		wp_enqueue_script('selectivizr', get_template_directory_uri().'/assets/scripts/selectivizr.js', FALSE, '1.0.3b');
		wp_script_add_data('selectivizr', 'conditional', 'IE 8' );

	}

	add_action( 'wp_enqueue_scripts', 'haley_scripts_styles' );

}

/*-----------------------------------------------------------------------------------*/
/* Theme setup */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_setup')) {

	function haley_setup() {

		global $content_width;

		if ( !isset($content_width) )
			$content_width = (haley_setting('haley_screen3')) ? (esc_attr(haley_setting('haley_screen3'))) : 1170;

		load_theme_textdomain( 'haley', get_template_directory() . '/languages');

		add_theme_support( 'post-formats', array( 'aside','gallery','quote','video','audio','link','status','chat','image' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo');

		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		));

		add_image_size( 'haley_blog_thumbnail', $content_width, 690, TRUE );


		add_image_size( 'haley_recent_post_large', 535, 375, TRUE );
		add_image_size( 'haley_recent_post_small', 268, 195, TRUE );

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'haley' )
		));

		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/aside-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/default-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/image-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/link-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/page-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/product-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/quote-format.php' );

		require_once( trailingslashit( get_template_directory() ) . '/core/templates/after-content.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/before-content.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/footer.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/masonry.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/media.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/pagination.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/post-author.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/post-formats.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/title.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/top-section.php' );

		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/bottom-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/footer-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/header-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/scroll-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/side-sidebar.php' );

		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-customize.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-metaboxes.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-notice.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-plugin-activation.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-welcome-page.php' );

		require_once( trailingslashit( get_template_directory() ) . '/core/admin/customize/customize.php' );

		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-required-plugins.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-style.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-widgets.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-woocommerce.php' );

		require_once( trailingslashit( get_template_directory() ) . '/core/metaboxes/page.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/metaboxes/post.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/metaboxes/product.php' );


	}

	add_action( 'after_setup_theme', 'haley_setup' );

}

/*-----------------------------------------------------------------------------------*/
/* Exclude featured posts on homepage */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_exclude_recent_posts_on_home')) {

	function haley_exclude_recent_posts_on_home(&$query) {

		if (
			$query->is_home() &&
			$query->is_main_query() &&
			(
				haley_setting('haley_enable_recent_posts', true) == true &&
				haley_setting('haley_exclude_recent_posts_on_loop', false) == true
			)
		) {

			$offset = 9;

			$ppp = get_option('posts_per_page');

			if ( $query->is_paged ) {

				$page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );
				$query->set('offset', $page_offset );

			}
			else {
				$query->set('offset',$offset);
			}

		}

	}

	add_action('pre_get_posts', 'haley_exclude_recent_posts_on_home', 1 );

}

/*-----------------------------------------------------------------------------------*/
/* Adjust offset pagination */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haley_adjust_offset_pagination')) {

	function haley_adjust_offset_pagination($found_posts, $query) {

		$offset = 9;

		if (
			$query->is_home() &&
			$query->is_main_query() &&
			(
				haley_setting('haley_enable_recent_posts', true) == true &&
				haley_setting('haley_exclude_recent_posts_on_loop', false) == true
			)
		) {
					return $found_posts - $offset;
		}

		return $found_posts;

	}

	add_filter('found_posts', 'haley_adjust_offset_pagination', 1, 2 );

}


?>

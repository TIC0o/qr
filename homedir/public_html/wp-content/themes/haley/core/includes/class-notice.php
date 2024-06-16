<?php

/**
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if( !class_exists( 'haley_admin_notice' ) ) {

	class haley_admin_notice {
	
		/**
		 * Constructor
		 */
		 
		public function __construct( $fields = array() ) {

			if ( 
				!get_option( 'haley-dismissed-notice') &&
				version_compare( PHP_VERSION, HALEY_MIN_PHP_VERSION, '>=' )
			) {

				add_action( 'admin_notices', array(&$this, 'admin_notice') );
				add_action( 'admin_head', array( $this, 'dismiss' ) );
				add_action( 'admin_init', array(&$this, 'add_script') ,11);

            }

		}
        
		 /**
		 * Loads the notice style
		 */

		public function add_script() {

			global $wp_version;

			$file_dir = get_template_directory_uri() . '/core/admin/assets/';
			wp_enqueue_style ( 'haley-notice', $file_dir.'css/notice.css' );

		}
        
        
        /**
		 * Dismiss notice.
		 */
		
		public function dismiss() {

			if ( isset( $_GET['haley-dismiss'] ) && check_admin_referer( 'haley-dismiss-action' ) ) {
		
				update_option( 'haley-dismissed-notice', intval($_GET['haley-dismiss']) );
				remove_action( 'admin_notices', array(&$this, 'admin_notice') );
				
			} 
		
		}

		/**
		 * Admin notice.
		 */
		 
		public function admin_notice() {
			
		?>
			
            <div class="notice notice-warning is-dismissible">
                
            	<p>
            
            		<strong>

                        <?php esc_html_e( 'Pay what you want to unlock all premium features of Haley theme like...', 'haley' );  ?>
                    
                    </strong>
                
                </p>
                
                <p class="notice-coupon-message">

					<span class="dashicon dashicons dashicons-yes-alt" size="10"></span><?php esc_html_e( '600+ Google Fonts', 'haley' ); ?><br/>
					<span class="dashicon dashicons dashicons-yes-alt" size="10"></span><?php esc_html_e( 'Custom colors', 'haley' ); ?><br/>
					<span class="dashicon dashicons dashicons-yes-alt" size="10"></span><?php esc_html_e( 'Portfolio section', 'haley' ); ?><br/>
					<span class="dashicon dashicons dashicons-yes-alt" size="10"></span><?php esc_html_e( 'Unlimited widget areas', 'haley' ); ?><br/>
					<span class="dashicon dashicons dashicons-yes-alt" size="10"></span><?php esc_html_e( 'Lifetime updates and support', 'haley' ); ?>
                
                </p>

				<p>
            		
					<a target="_blank" href="<?php echo esc_url( 'https://www.themeinprogress.com/haley-elegant-and-minimal-wordpress-theme/?ref=2&campaign=haley-notice' ); ?>" class="button button-primary"><?php esc_html_e( 'Name your price', 'haley' ); ?></a>
                
            	</p>

            	<p>

                    <?php

                        printf( 
                            '<a href="%1$s" class="dismiss-notice">' . esc_html__( 'Dismiss this notice', 'haley' ) . '</a>', 
                            esc_url( wp_nonce_url( add_query_arg( 'haley-dismiss', '1' ), 'haley-dismiss-action'))
                        );

                    ?>
                    
            	</p>
                    
            </div>
		
		<?php
		
		}

	}

}

new haley_admin_notice();

?>
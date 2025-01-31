<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('haley_masonry_function')) {
	
	function haley_masonry_function () { 
	
		if ( have_posts() ) :
	
	?>
        
			<div class="row masonry" id="masonry">
                    
                <?php while ( have_posts() ) : the_post(); ?>
               
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                        <?php do_action('haley_postformat'); ?>
                
                    </div>

                <?php endwhile; ?>

			</div>
	
	<?php 
	
		else:
	
	?>

			<div class="row">

                <div class="post-container col-md-12">
            
                    <article class="post-article">
                            
                        <h1><?php esc_html_e( 'Not found.', 'haley' );?></h1>
                        <p><?php esc_html_e( 'Sorry, no items found, in this section.', 'haley' ) ?></p>
             
                    </article>
            
				</div>
        	
			</div>

	<?php 
	
		endif;
	
	} 

	add_action( 'haley_masonry', 'haley_masonry_function');

} 

?>
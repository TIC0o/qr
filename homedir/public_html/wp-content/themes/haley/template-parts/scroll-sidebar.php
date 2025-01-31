<div id="overlay-body"></div>

<div id="sidebar-wrapper">
	
	<div id="scroll-sidebar" class="clearfix">
    
		<div class="wrap">

            <a class="close-modal-sidebar" href="#modal-sidebar">
                <i class="fa fa-times open"></i>
            </a>

            <div class="post-article mobile-menu-wrapper">
    
                <div class="title-container">
                	<h3 class="title"><?php esc_html_e('Menu','haley');?></h3>
                </div>

                <nav id="mobilemenu">

                	<?php
                    
					    wp_nav_menu( array(
                        
						    'theme_location' => 'main-menu',
                            'container' => 'false'
                        
						));
                    
					?>
            	
                </nav>

            </div>

            <?php
            
                get_sidebar('scroll');
            
            ?>

            <div class="post-article">
    
                <div class="copyright">
                        
                    <p>
                    
                        <?php 
                        
                            echo esc_html__('Copyright ','haley') . esc_html(get_bloginfo("name")) . " " . date("Y");
                                
                            echo " | " . esc_html__('Theme by','haley'); 
                        ?> 
                        
                            <a href="<?php echo esc_url('https://www.themeinprogress.com/'); ?>" target="_blank"><?php esc_html_e('ThemeinProgress','haley');?></a> |
                            <a href="<?php echo esc_url('http://wordpress.org/'); ?>" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'haley' ); ?>" rel="generator"><?php printf( esc_html__( 'Proudly powered by %s', 'haley' ), 'WordPress' ); ?></a>
                        
                    </p>
                            
                </div>
    
            </div>
        
		</div>
	    
	</div>

</div>
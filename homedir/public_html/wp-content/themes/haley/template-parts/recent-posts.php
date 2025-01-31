<?php

    if ( haley_setting('haley_enable_recent_posts', true) == true ) :

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'ignore_sticky_posts' => true,
        );

        $recent_posts = new WP_Query($args);

        if ($recent_posts->have_posts()) :

    ?>

        <section class="recent-posts-section">

            <div class="container">
                
                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="recent-posts-grid">

                            <div class="recent-posts-left-column">
                                
                                <?php

                                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                                        
                                        global $post;

                                        $post_count = $recent_posts->current_post + 1;

                                        if ($post_count <= 6) :
                                
                                ?>
                                            <div class="recent-post recent-post-small">

                                                <h3 class="recent-post-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
                                                
                                                <p class="recent-post-meta">

                                                    <span class="recent-post-category">
                                                        <?php the_category(' . '); ?>
                                                    </span>

                                                    <span class="recent-post-date">
                                                        <?php echo esc_html(get_the_date()); ?>
                                                    </span>
                                                
                                                </p>

                                            </div>
                                <?php

                                        endif;
                                        if ($post_count == 7) :
                                
                                ?>

                            </div>

                            <div class="recent-posts-center-column">

                                <div class="recent-post recent-post-large">
                                    
                                    <div class="pin-container">

                                        <?php

                                            if ('' != get_the_post_thumbnail() ) : 

                                                the_post_thumbnail('haley_recent_post_large');
                                            
                                            else :

                                                $thumbnailIMG = get_stylesheet_directory_uri() . '/assets/images/placeholder-535x375.jpg';
                                                echo '<img src="' . esc_url($thumbnailIMG) . '" alt="' . esc_attr(get_the_title()) . '">';
                            
                                            endif;
                                        ?>

                                    </div>

                                    <div class="recent-post-info">

                                        <h3 class="recent-post-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
                                        
                                        <p class="recent-post-meta">

                                            <span class="recent-post-category">
                                                <?php the_category(' . '); ?>
                                            </span>

                                            <span class="recent-post-date">
                                                <?php echo esc_html(get_the_date()); ?>
                                            </span>

                                        </p>

                                        <p class="recent-post-summary"><?php echo the_excerpt(); ?></p>
                                    
                                    </div>

                                </div>

                            </div>

                            <div class="recent-posts-right-column">
                                
                                <?php
                                
                                    endif;
                                    if ($post_count > 7) :
                                
                                ?>
                                        <div class="recent-post recent-post-small">

                                            <div class="pin-container">

                                                <?php

                                                    if ('' != get_the_post_thumbnail() ) : 

                                                        the_post_thumbnail('haley_recent_post_small');
                                                    
                                                    else :

                                                        $thumbnailIMG = get_stylesheet_directory_uri() . '/assets/images/placeholder-268x195.jpg';
                                                        echo '<img src="' . esc_url($thumbnailIMG) . '" alt="' . esc_attr(get_the_title()) . '">';
                                    
                                                    endif;
                                                ?>

                                            </div>

                                            <div class="recent-post-info">

                                                <h3 class="recent-post-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
                                                
                                                <p class="recent-post-meta">

                                                    <span class="recent-post-category">
                                                        <?php the_category(' . '); ?>
                                                    </span>

                                                    <span class="recent-post-date">
                                                        <?php echo esc_html(get_the_date()); ?>
                                                    </span>

                                                </p>

                                            </div>

                                        </div>
                            <?php

                                    endif;

                                endwhile;
                                wp_reset_postdata();
                                
                            ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php

        endif;


    endif;

?>
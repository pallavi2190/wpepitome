<div class="container">
    <div class="services-head">
        <h2>Check our latest Wordpress Theme which implements a Page Bulder</h2>
        <p>Learn how to build Wordpress Themes with ease with a premium Page Builder which allows you to add new Pages in seconds.</p>
    </div><!--- Services Head ------>
    <div class="services-container">
    <?php 
        $args = array(
            'post_type' => 'services',
            'post_status' => 'published',
            'posts_per_page' => 4
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="service-col pull-left col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-circle">
                        <div class="service-icon">
                            <?php  the_post_thumbnail(); ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p> <?php the_excerpt(); ?> </p>
                        <a href="<?php the_permalink(); ?>" class="service-read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
        <?php   wp_reset_postdata(); 
            endwhile; 
        endif; ?>
    </div>
</div>
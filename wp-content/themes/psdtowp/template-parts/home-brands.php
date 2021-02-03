<div class="container">
    <div class="brands-container">
        <div class="brands-carousel owl-carousel owl-theme">
        <?php 
            $args = array(
                'post_type' => 'brands',
                'post_status' => 'published',
                'posts_per_page' => 5
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="brands-item">
                    <div class="brands-col pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="brands-thumbnail">
                            <?php  the_post_thumbnail('thumbnail'); ?>
                        </div>
                    </div>
                </div>
            <?php   wp_reset_postdata(); 
                endwhile; 
            endif; ?>
        </div>
    </div>
</div>
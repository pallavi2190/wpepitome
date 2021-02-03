<div class="container">
    <div class="news-head">
        <h2>Our Latest News</h2>
    </div><!--- news Head ------>
    <p class="news-subheading">Lorem ipsum dolor sit amet, coctetuer adipiscing elit, sed di nonummy nibh euismod te.</p>
    <div class="news-container">
    <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'published',
            'posts_per_page' => 3
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="news-col pull-left col-lg-4 col-md-4 col-sm-6 col-xs-12">                   
                    <div class="news-thumbnail">
                        <?php  the_post_thumbnail('thumbnail'); ?>
                        <?php  get_post_createdon(); ?>
                    </div>
                    <div class="news-detail">
                        <h3><?php the_title(); ?></h3>
                        <p> <?php get_tags_list(); ?> </p>
                        <p> <?php the_excerpt(); ?> </p>
                    </div>                    
                </div>
        <?php   wp_reset_postdata(); 
            endwhile; 
        endif; ?>
    </div>
</div>
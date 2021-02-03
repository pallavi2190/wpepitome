<div class="container">
    <div class="portfolio-head">
        <h2>RECENT PORTFOLIO</h2>
    </div><!--- portfolio Head ------>
    <p class="portfolio-subheading">Lorem ipsum dolor sit amet, coctetuer adipiscing elit, sed di nonummy nibh euismod te.</p>
    <div class="portfolio-container">
        <div class="portfolio-carousel owl-carousel owl-theme">
        <?php 
            $args = array(
                'post_type' => 'portfolios',
                'post_status' => 'published',
                'posts_per_page' => 4
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="portfolio-item">
                    <div class="portfolio-col pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="portfolio-square">
                            <div class="portfolio-thumbnail">
                                <?php  the_post_thumbnail('medium'); ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <p> <?php the_excerpt(); ?> </p>
                        </div>
                    </div>
                </div>
            <?php   wp_reset_postdata(); 
                endwhile; 
            endif; ?>
        </div>
    </div>
</div>
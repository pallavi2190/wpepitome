<div class="container">
    <div class="testimonials-section pull-left col-lg-6 col-md-6 col-sm-6 col-sm-12">
        <div class="testimonials-head">
            <h2>TESTIMONIALS</h2>
        </div><!--- testimonial Head ------>
        <div class="testimonials-container">
        <?php 
            $args = array(
                'post_type' => 'testimonials',
                'post_status' => 'published',
                'posts_per_page' => 3
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="testimonials-col pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">                   
                        <div class="testimonials-thumbnail">
                            <?php  the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <div class="testimonials-detail">
                            <p> <?php the_excerpt(); ?> </p>                            
                            <h6><?php the_title(); ?></h6>
                        </div>                    
                    </div>
            <?php   wp_reset_postdata(); 
                endwhile; 
            endif; ?>
        </div>
    </div>
    <div class="faqs-section pull-left col-lg-6 col-md-6 col-sm-6 col-sm-12">
    <div class="faqs-head">
            <h2>FREQUENTLY ASKED QUESTIONS</h2>
        </div><!--- testimonial Head ------>
        <div class="faqs-container accordion"  id="accordian_container">

        <?php 
            $args = array(
                'post_type' => 'faqs',
                'post_status' => 'published',
                'posts_per_page' => 6
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="faqs-col pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">     
                        
                            <div class="faqs-detail card">
                                <div class="card-header" id="faq-id-<?php the_ID(); ?>">
                                   
                                <div class="btn btn-link" data-toggle="collapse" data-target="#collapse-id-<?php the_ID(); ?>">
                                        <div class="faq-toggle-icon"><i class="fa fa-plus"></i> </div>
                                        <div class="faq-title">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>												
                                    
                                </div>
                                <div id="collapse-id-<?php the_ID(); ?>" class="collapse" aria-labelledby="faq-id-<?php the_ID(); ?>" data-parent="#accordian_container">
                                    <div class="card-body">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        
                        
                    </div>
            <?php   wp_reset_postdata(); 
                endwhile; 
            endif; ?>

               
        </div>
    </div>
</div>

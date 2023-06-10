<section id="clients" class="clients section-bg">
   <div class="container">
      <div class="section-title">
         <h2><?php echo get_theme_mod('title6') ?></h2>
      </div>
      <div class="row aos-init aos-animate" data-aos="zoom-in">
           <?php 
                  $tax = $wp_query->get_queried_object();
                  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                  $args= array(
                      'posts_per_page' => 12,
                      'post_type' => 'client',
                      'paged' => $paged,
                      'orderby' => 'date',
                   );
                   $the_query = new WP_Query( $args );
                   ?>
                 <?php 
                   if ( $the_query->have_posts() ) : 
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                   ?>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'partner');?>">
             </div>
            <?php endwhile; endif;?>
		  
		  
      </div>
	   <div class="parnterAll">
		   <a href="/rajoverseas/employers-jobseeker/clients/" class="btn btn-success btn-md messageBtn">View More</a>
	   </div>
   </div>
</section>
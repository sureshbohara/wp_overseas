 <section class="services section-bg" id="service">
     <div class="container">
      <div class="section-title aos-init aos-animate" data-aos="fade-up">
         <h2 class="serviceTitle"><?php echo get_theme_mod('title2') ?></h2>
      </div>
      <div class="row">

             <?php 
                       $args = array(
                      'post_type' => 'post',
                      'page_status' => 'publish',
                      'category_name' => 'Services',
                      'posts_per_page' => 8
                     );
                      $myQuery = new WP_Query($args);
                      if($myQuery->have_posts()){
                      while($myQuery->have_posts()): $myQuery->the_post();
                    ?>
                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate py-2" data-aos="zoom-in">
                       <div class="icon-box icon-box-pink">
                              <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                               } else { ?>
                               <div class="icon">
                                   <i class="bx bxl-dribbble"></i>
                                   </div>
                             <?php } ?>
                         <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                         <p class="description"><?php echo wp_trim_words(get_the_content(), 20 );?><a href="<?php the_permalink(); ?>">Read More</a></p>
                       </div>
                      </div>
                 <?php endwhile; }; ?>
               <?php wp_reset_query(); ?>



      </div>
   </div>
   </section>
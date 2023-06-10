  <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials" style="background-image: url(<?php echo get_theme_mod('bg_image3_settings') ?>);">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
             <?php 
                $tax = $wp_query->get_queried_object();
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args= array(
                    'posts_per_page' => 5,
                    'post_type' => 'post',
                    'paged' => $paged,
                    'category_name' => 'Testimonial',
                    'orderby' => 'date',
                 );
                  $the_query = new WP_Query( $args );
                 ?>

                <?php 
                    if ( $the_query->have_posts() ) : 
                   while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>
                <div class="swiper-slide">
                <div class="testimonial-item">

                  <?php $reviewImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'thumb');?>

                  <?php if( has_post_thumbnail() ) { ?>
                  <img src="<?php echo $reviewImage['0']; ?>" class="testimonial-img" alt="<?php the_title(); ?>">
                  <?php } ?>

                  <h3><?php the_title(); ?></h3>
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
            <?php endwhile; endif;?>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->
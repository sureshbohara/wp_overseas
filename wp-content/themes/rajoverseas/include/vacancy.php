<section id="features" class="features section-bg">
   <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="row">  
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left" data-aos-delay="140">
               <div class="section-title aos-init aos-animate py-4" data-aos="fade-up">
                  <h2><?php echo get_theme_mod('title3') ?></h2>
               </div>
               <?php 
                $tax = $wp_query->get_queried_object();
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args= array(
                    'posts_per_page' => 5,
                    'post_type' => 'post',
                    'paged' => $paged,
                    'category_name' => 'Vacancy',
                    'orderby' => 'date',
                 );
                  $the_query = new WP_Query( $args );
                 ?>
                <?php 
                    if ( $the_query->have_posts() ) : 
                   while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>
                <div class="icon-box mt-5 mt-lg-0 aos-init py-2" data-aos="zoom-in" data-aos-delay="140">
                  <?php $image = get_field('job_image'); ?>
                    <?php if (get_field('job_image') ) : ?>
                     <img src="<?php echo $image['sizes']['gallery'];?>"style="width: 50px;border-radius: 50%;position: absolute;padding: 5px;">
                    <?php else : ?>
                      <i class="bx bx-shield"></i>
                   <?php endif; ?>
                  <h4><a href="<?php the_permalink(); ?>" style="color:#179b49;"> <?php the_title(); ?> </a>
                  &nbsp;&nbsp;&nbsp;
                   <button style="float: right;" type="button" class="btn btn-success btn-sm applyButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?php echo $post->ID; ?> " data-title="<?php the_title(); ?>"  data-country="<?php the_field('country_name'); ?>" >
                 Apply Now
               </button>
                  </h4>
                    <span style="display: flex;float: left;">
                     <h5 class="vacancyTitle" style="font-size: 15px;">
                        <i class="bx bx-user-circle" style="font-size: 25px;"></i>
                        &nbsp;
                     Number Of Vacancy : (<?php the_field('number_of_vacancy'); ?>)
                     </h5>
                      &nbsp;&nbsp;&nbsp;
                     <h5 class="vacancyTitle" style="font-size: 15px;">
                      <i class="bx bx-paper-plane" style="font-size: 25px;"></i>
                      &nbsp;
                      Country Name : (<?php the_field('country_name'); ?>)</h5>
                    
                    </span><br><hr>
               </div>
              <?php endwhile; endif;?>
         </div>
         <div class="image col-lg-6 aos-init aos-animate" data-aos="fade-right">
            <div class="section-title aos-init aos-animate py-4" data-aos="fade-up">
              <h2><?php echo get_theme_mod('title4') ?></h2>
            </div>
             <div class="row">
				 
			<?php echo do_shortcode('[ngg src="recent_images" display="basic_thumbnail" thumbnail_crop="0" images_per_page="9" number_of_columns="3" maximum_entity_count="9"]'); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog model-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Apply Vacancy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
         <form action="forms/job.php" method="POST" role="form" class="php-email-form" enctype="multipart/form-data">
         <input type="hidden" name="id" id="id">
          <div class="modal-body">
            
            <div class="col-md-12 form-group mt-3">
                <label for="">Vacancy Title</label>
                 <input type="text" name="title" id="title" class="form-control" readonly>
            </div>
            <div class="col-md-12 form-group mt-3">
                <label for="">Apply Country</label>
                 <input type="text" name="country" id="country" class="form-control" readonly>
           </div>
           <div class="row">
              <div class="col-md-6 form-group mt-3">
                <label for="">Full Name</label>
                 <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <label for="">Email</label>
                 <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <label for="">Address</label>
                 <input type="text" name="address" class="form-control" id="address" placeholder="Addres" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <label for="">DOB</label>
                 <input  type="date" class="form-control" name="dob" id="dob" placeholder="Date of birth" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <label for="">CV</label>
                 <input type="file" name="cv" class="form-control" id="cv">
              </div>
              <div class="col-md-6 form-group mt-3">
                <label for="">Passport</label>
                 <input type="file" class="form-control" name="citizenship" id="citizenship">
              </div>
            </div>
           </div>
            <div class="modal-footer">
              <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
             </div>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Apply Now</button>
            </div>
          </form>
      </div>
      </div>  
</div>

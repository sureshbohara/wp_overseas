  <section class="about section-bg" id="message">
   <div class="container">
      <div class="row gy-4">
         <div class="image col-xl-5">
               <img src="<?php echo get_theme_mod('director_image','gallery') ?>" alt=" <?php echo get_theme_mod('director_name') ?>" style="width: 100%;" class="messageImage">
               <h4 style="background: #169847;text-align: center;color: #e7e7e7;box-shadow: 8px 8px 9px rgb(79 54 141 / 50%);" class="py-2">
                <?php echo get_theme_mod('director_name') ?> ,
                <?php echo get_theme_mod('director_position') ?>   
               </h4>
         </div>
         <div class="col-xl-7">
            <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
               <h3 data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate">
                 <?php echo get_theme_mod('message_title') ?>
               </h3>
               <div class="row gy-4">
                  <div class="col-md-12 icon-box aos-init aos-animate" data-aos="fade-up">
                     <?php echo nl2br(get_theme_mod('message_description')) ?><hr>
                     <a href="<?php echo get_theme_mod('button_link') ?>" class="btn btn-success btn-md messageBtn" target="_"><?php echo get_theme_mod('messsage_button') ?></a>
                  </div>


               </div>
            </div>
         </div>
      </div>
   </div>
  </section>
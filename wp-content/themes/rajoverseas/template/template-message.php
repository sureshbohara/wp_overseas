<?php 
/* Template Name: Message Page*/
 get_header(); ?>

       <style>
  .breadcrumbs{
    top: 0; 
    background-size: cover;
    right: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    padding: 150px 0px;
   box-shadow: inset 0 0 0 1000px rgb(0 0 0 / 47%);	
}
</style>
   <!-- ======= Breadcrumbs ======= -->
<?php $breadcrumbImage = get_theme_mod('breadcrumb_settings'); ?>
    <section class="breadcrumbs" style="background-image: url(<?php echo $breadcrumbImage; ?>);">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2> <?php the_title(); ?></h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li> <?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section>

     <section class="about section-bg">
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
                  </div>


               </div>
            </div>
         </div>
      </div>
   </div>
  </section>

<?php get_footer(); ?>
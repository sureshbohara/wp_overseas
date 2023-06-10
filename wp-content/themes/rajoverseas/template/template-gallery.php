<?php 
/* Template Name: Gallery Page*/
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

   
  <section id="gallery" class="gallery">
     <div class="container-fluid">
        <div class="section-title">
           <h2><?php echo get_theme_mod('title5') ?></h2>
        </div>
          <?php 
           $ourGallery = get_field('our_gallery');
           if( $ourGallery ): ?>
          <div class="row g-0">
          <?php foreach( $ourGallery as $gallery ): ?>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item"> <a href="<?php echo esc_url($gallery['sizes']['gallery']); ?>" class="gallery-lightbox"> <img src="<?php echo esc_url($gallery['sizes']['gallery']); ?>" alt="" class="img-fluid"> </a></div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
     </div>
  </section>
<?php get_footer(); ?>
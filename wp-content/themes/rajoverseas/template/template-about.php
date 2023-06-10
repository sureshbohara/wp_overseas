<?php 
/* Template Name: About Page*/
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
        <div class="d-flex justify-content-between align-items-center brdText">
          <h2> <?php the_title(); ?></h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li> <?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section>

   <section>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('title1') ?></h2>
        </div>

        <div class="row">

          <div class="col-lg-6 aboutImage" data-aos="fade-right" data-aos-delay="100">
             <img src="<?php echo get_theme_mod('about_image','full') ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 content aboutTitle" >
            <h3><?php echo get_theme_mod('title') ?></h3>
            <p style="text-align: justify;"><?php echo nl2br(get_theme_mod('description')) ?></p>

          </div>
        </div>

      </div>
    </section>

<?php get_footer(); ?>
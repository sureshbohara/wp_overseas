<?php get_header();?> 
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
    <!-- End Breadcrumbs -->

  
<section class="blog py-4">
   <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-12 entries">
            <article class="entry entry-single">
   
               <div class="entry-content">
                  <p>  <?php the_content(); ?></p>
               </div>
            </article>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>

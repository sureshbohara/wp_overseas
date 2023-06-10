<?php 
/* Template Name: Client Page*/
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
                      'posts_per_page' => 18,
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
   </div>
</section>

<?php get_footer(); ?>
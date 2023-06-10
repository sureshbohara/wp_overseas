<?php 
/* Template Name: Service Page*/
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

      <section class="services">
     <div class="container">
      <div class="section-title aos-init aos-animate" data-aos="fade-up">
         <h2><?php echo get_theme_mod('title2') ?></h2>
      </div>
      <div class="row">
          <?php 
                $tax = $wp_query->get_queried_object();
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args= array(
                    'posts_per_page' => 8,
                    'post_type' => 'post',
                    'paged' => $paged,
                    'category_name' => 'Services',
                    'orderby' => 'date',
                 );
                  $the_query = new WP_Query( $args );
                 ?>

                <?php 
                    if ( $the_query->have_posts() ) : 
                   while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate py-2" data-aos="zoom-in">

               <div class="icon-box icon-box-pink">
                 <div class="icon"><i class="bx bxl-dribbble"></i></div>
                 <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                 <p class="description"><?php echo wp_trim_words(get_the_content(), 25 );?></p>
               </div>
              </div>
            <?php endwhile; endif;?>


      </div>
   </div>
   </section>

<?php get_footer(); ?>